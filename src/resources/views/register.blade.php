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
                        <form action="/register/infomation" method="GET">
                        <!-- CSRF保護 -->
                        @csrf
                            <span id="termsOfServiceTitle">利用規約</span>
                            <div id="termsOfService" class="w-90 rf-auto mt-1">
                                <p>利用規約</p>
                                <p>利用規約</p>
                                <p>利用規約</p>
                                <p>利用規約</p>
                                <p>利用規約</p>
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <label class="box_radio_input">
                                    <input type="radio" name="terms_of_service" value="1">
                                    <span>規約に同意します</span>
                                </label>
                                <label class="box_radio_input">
                                    <input type="radio" name="terms_of_service" value="2">
                                    <span>規約に同意しません</span>
                                </label>
                            </div>
                            <div class="w-90 rf-auto mt-1">
                                <input id="registerButton" type="submit" value="新規登録">
                            </div>
                        </form>
                        <div class="right w-90 rf-auto mt-1">
                            <a href="../login">ログインへ</a>
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
