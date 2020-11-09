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
                        <form action="/admin/login" method="POST">
                        <!-- CSRF保護 -->
                        @csrf
                            <div class="w-90 rf-auto mt-3">
                                <input type="text" name="email" placeholder="メールアドレス">
                            </div>
                            <div class="w-90 rf-auto">
                                <input type="password" name="password" placeholder="ログインパスワード">
                            </div>
                            <div class="w-90 rf-auto">
                                <input id="loginButton" type="submit" value="ログイン">
                            </div>
                        </form>
                    </div>
                <div>
            </div>
        </div>
    </body>
</html>
