<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SING UP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
            <div id="registerContent" class="center">
                <div class="register_inner_content hero">
                    <div id="registerFormContent">
                        <h1 class="tc-white rf-auto">新規登録</h1>
                        <form action="/register" method="POST">
                        <!-- CSRF保護 -->
                        @csrf
                            <div class="w-90 rf-auto mt-1">
                                <input type="text" name="user" placeholder="ユーザー名(英数字入力、重複なし)">
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input type="password" name="password" placeholder="パスワード(英数字記号)">
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input type="password" name="password_confirm" placeholder="パスワード確認用(英数字記号)">
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input type="email" name="email" placeholder="メールアドレス(重複なし)">
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input type="text" name="affiliate_user" placeholder="紹介者(英数字入力)">
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input type="text" name="eth_address" placeholder="ETH ADDRESS">
                            </div>

                            <div class="w-90 rf-auto mt-1">
                                <input id="registerButton" type="submit" value="新規登録">
                            </div>
                        </form>
                        <div class="right w-90 rf-auto mt-1">
                            <a href="/login">ログインへ</a>
                        </div>
                    </div>
                    <div id="registerTitle">
                        <div class="register-sidebar-content-title">EXCUCI FRAM</div>
                        <div class="register-sidebar-content-item">EXCUCI FRAMはみんながハッピーになれます。</div>
                    </div>
                <div>
            </div>
        </div>
    </body>
</html>
