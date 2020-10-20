<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOTTERY</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
        @include('header')
            <div id="lotteryContent">
                <h2>抽選申込</h2>
                <div class="lottery_content">
                    <div class="my_infomation">
                        <h3>{{ $user }}</h3>
                        <p>予約するにはスターチケットが必要です。</p>
                        <p>スターチケット: <span>{{ $ticket }}</span></p>
                    </div>
                    <div class="card_list">
                        <div class="card_item">
                            <img class="card" src="{{ asset('/images/t001c.png') }}">
                            <div class="item_info">
                                <h2>MOUSE マウス</h2>
                                <p class="price1">
                                    <span>価格</span>
                                    (50 ~ 300 USD)
                                </p>
                                <p class="price1">
                                    <span>スターチケット数量</span>
                                    20EA
                                </p>
                                <button>
                                    予約
                                </button>
                            </div>
                        </div>
                        <div class="card_item">
                            <img class="card" src="{{ asset('/images/t018c.png') }}">
                            <div class="item_info">
                                <h2>MOUSE マウス</h2>
                                <p class="price1">
                                    <span>価格</span>
                                    (50 ~ 300 USD)
                                </p>
                                <p class="price1">
                                    <span>スターチケット数量</span>
                                    20EA
                                </p>
                                <button>
                                    予約
                                </button>
                            </div>
                        </div>
                        <div class="card_item">
                            <img class="card" src="{{ asset('/images/t011c.png') }}">
                            <div class="item_info">
                                <h2>MOUSE マウス</h2>
                                <p class="price1">
                                    <span>価格</span>
                                    (50 ~ 300 USD)
                                </p>
                                <p class="price1">
                                    <span>スターチケット数量</span>
                                    20EA
                                </p>
                                <button>
                                    予約
                                </button>
                            </div>
                        </div>
                        <div class="card_item">
                            <img class="card" src="{{ asset('/images/t004c.png') }}">
                            <div class="item_info">
                                <h2>MOUSE マウス</h2>
                                <p class="price1">
                                    <span>価格</span>
                                    (50 ~ 300 USD)
                                </p>
                                <p class="price1">
                                    <span>スターチケット数量</span>
                                    20EA
                                </p>
                                <button>
                                    予約
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
