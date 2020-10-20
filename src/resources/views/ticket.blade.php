<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TICKET</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
        @include('header')
            <div id="ticketContent">
                <div id="ticketInfoContent">
                    <h2>{{ $user }}</h2>
                    <h3>チケット数 {{ $ticket }}</h3>
                    <p>チケット購入枚数 1チケット11円</p>
                    <p>最低購入枚数 300チケット 3300円</p>
                    <p>現金振込 ゆうちょ銀行 店番018 普通8038292 ユーエイチエスワールド</p>
                </div>
            </div>
        </div>
    </body>
</html>
