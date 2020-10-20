<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MYPAGE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
        @include('header')
            <div id="mypageContent">
                <h2>マイページ</h2>
                <div class="mypage_content">
                    <form action="" method="POST">
                        <!-- CSRF保護 -->
                        @csrf
                        <div class="w-90 rf-auto mt-1">
                            <label>ユーザー名</label>
                            <span>{{ $user }}</span>
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>メールアドレス</label>
                            <span>{{ $ticket }}</span>
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>電話番号</label>
                            <input type="number">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>カナ名</label>
                            <input type="text">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>PINコード</label>
                            <input type="password">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>銀行名</label>
                            <input type="text">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>口座番号</label>
                            <input type="number">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>口座種別</label>
                            <input type="text">
                        </div>
                        <div class="w-90 rf-auto mt-1">
                            <label>支店名</label>
                            <input type="text">
                        </div>
                        <div class="w-90 rf-auto mt-1 center">
                            <input id="mypageUpdataButton" type="submit" value="更新">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
