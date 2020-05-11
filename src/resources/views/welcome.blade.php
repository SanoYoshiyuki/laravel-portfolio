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
        <div class="content">
            <nav id="headerNav">
                <div class="flex w-100">
                    <a class="flex flex-center">
                        <img src="{{ asset('/images/logo.svg') }}" />
                    </a>
                </div>
            </nav>
            <div class="test-title">
                <p>test</p>
            </div>
        </div>
    </body>
</html>
