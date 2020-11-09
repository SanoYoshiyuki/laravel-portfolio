<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LOTTERY</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
        @include('header')
            <div id="transactionContent">
                <h2>予約状況</h2>
                <div class="transaction_content">
                    <div class="transaction_list">
                        @foreach($transaction as $t)
                        <div class="card_item">
                            @if ($t->gem_id == 1)
                            <img class="card" src="{{ asset('/images/t001c.png') }}">
                            @elseif ($t->gem_id == 2)
                            <img class="card" src="{{ asset('/images/t018c.png') }}">
                            @elseif ($t->gem_id == 3)
                            <img class="card" src="{{ asset('/images/t011c.png') }}">
                            @elseif ($t->gem_id == 4)
                            <img class="card" src="{{ asset('/images/t004c.png') }}">
                            @endif
                            <div class="item_info">
                                <h2>No.{{ $t->id }}
                                    @if ($t->gem_id == 1)
                                    AAA
                                    @elseif ($t->gem_id == 2)
                                    BBB
                                    @elseif ($t->gem_id == 3)
                                    CCC
                                    @elseif ($t->gem_id == 4)
                                    DDD
                                    @endif
                                </h2>
                                <p class="price1">
                                    <span>価格</span>
                                    @if ($t->gem_id == 1)
                                    (50 ~ 300 USD)
                                    @elseif ($t->gem_id == 2)
                                    (500 ~ 300 USD)
                                    @elseif ($t->gem_id == 3)
                                    (5000 ~ 300 USD)
                                    @elseif ($t->gem_id == 4)
                                    (50000 ~ 300 USD)
                                    @endif
                                </p>
                                <p class="price1">
                                    <span>申込日</span>
                                    {{ $t->created_at }}
                                </p>
                                <button id="" value="{{ $t->id }}" onclick="cancel(this)">
                                    予約取消
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- <h2>当選情報</h2>
                <div class="winning_content">
                    <div class="winning_list">
                        @foreach($transaction as $t)
                        <div class="card_item">
                            <img class="card" src="{{ asset('/images/t001c.png') }}">
                            <div class="item_info">
                                <h2>MOUSE マウス</h2>
                                <p class="price1">
                                    <span>価格</span>
                                    (50 ~ 300 USD)
                                </p>
                                <button id="" onclick="lottery(1, 20)">
                                    予約取消
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div> -->
            </div>
        </div>
        <script src="{{ asset('js/cancel.js') }}"></script>
    </body>
</html>
