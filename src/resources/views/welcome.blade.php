<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TOP</title>

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
            <div id="upparContent">
                <div id="topContent" class="">
                    <div id="titleContent" class="">
                        <span class="inner_content hero">
                            <span id="titleMsg" class="hero">
                                <p class="tc-white line-12 hero subject">EXCUCIFARMはマッチングのプラットフォームです。</p>
                                <p class="tc-white line-12 hero mt-1">EXCUCIFRAMは個人間取引をさぽーとします。</p>
                            </span>
                        </span>
                        <!-- <div class="inline-block mt-2">
                            <img id="titleImg" src="{{ asset('/images/t013c.jpg') }}">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
