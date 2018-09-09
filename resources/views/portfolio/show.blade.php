<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>About kuromoka</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <app-component :is-index="false"></app-component>
        </div>
        <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>
