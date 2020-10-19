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
            <nav id="headerNav" class="justify-content fiexd flex w-100">
                <div class="flex w-100">
                    <a class="flex flex-center" href="/">
                        <img src="{{ asset('/images/logo_stellargo-white.svg') }}" />
                    </a>
                    <ul class="l-header_menu">
                        <li class="l-header_menu_item"><a href="/ticket">チケット申請</a></li>
                        <li class="l-header_menu_item"><a>キャラ申込</a></li>
                        <li class="l-header_menu_item"><a>当選情報</a></li>
                    </ul>
                    <ul class="l-header_menu_sub">
                        <li class="l-header_menu_sub_item"><a>マイページ</a></li>
                        <li class="l-header_menu_sub_item"><a>情報修正</a></li>
                        <li class="l-header_menu_sub_item"><a>ログアウト</a></li>
                    </ul>
                </div>
            </nav>
            <div id="ticketContent">
                <div id="ticketInfoContent">
                    <h2>{ユーザー名}</h2>
                    <h3>チェット数 100</h3>
                    <p>チケット購入枚数 1チケット11円</p>
                    <p>最低購入枚数 300チケット 3300円</p>
                    <p>現金振込 ゆうちょ銀行 店番018 普通8038292 ユーエイチエスワールド</p>
                </div>
            </div>
        </div>
    </body>
</html>
