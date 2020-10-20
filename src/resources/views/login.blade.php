<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOGIN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content flex">
            <div id="loginContent" class="center">
                <div class="login_inner_content hero">
                    <div id="loginFormContent">
                        <h1 class="tc-white rf-auto">ログイン</h1>
                        <form action="/login" method="POST">
                        <!-- CSRF保護 -->
                        @csrf
                            <div class="w-90 rf-auto mt-3">
                                <input type="text" name="user" placeholder="ユーザー名(英数字入力、重複確認必須)">
                            </div>
                            <div class="w-90 rf-auto">
                                <input type="password" name="password" placeholder="ログインパスワード">
                            </div>
                            <div class="w-90 rf-auto">
                                <input id="loginButton" type="submit" value="ログイン">
                            </div>
                        </form>
                        <div class="right w-90 rf-auto mt-1">
                            <a href="/register">新規登録</a>
                        </div>
                    </div>
                    <div id="loginTitle">
                        <div class="login-sidebar-content-title">EXCUCI FRAM</div>
                        <div class="login-sidebar-content-item">EXCUCI FRAMはみんながハッピーになれます。</div>
                    </div>
                <div>
            </div>
        </div>
    </body>
</html>
