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
                    <a class="flex flex-center">
                        <img src="{{ asset('/images/logo_stellargo-white.svg') }}" />
                    </a>
                </div>
            </nav>
            <div id="upparContent">
                <div>
                    <video autoplay muted loop id="topVideo" class="fiexd">
                        <source src="{{ asset('/video/card-flipping-desktop.mp4') }}" type="video/mp4">
                    </video>
                    <div class="relative center">
                        <div class="flex flex-column flex-center main-width hero">
                            <img src="{{ asset('/images/logo_stellargo-white.svg') }}">
                            <h1>Global Financial Services</h1>
                            <p>The Stellargo ecosystem provides users with a basic function that allows them to have their own bank accounts and cryptocurrency wallets within their individual app. It also stores legal currencies and cryptocurrencies and provides the ability to use legal currencies and cryptocurrencies in different payments in one app. For example,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
