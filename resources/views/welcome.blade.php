<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Cookie-Bakery')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}" />
    </head>
    <body>

        <div id="app">
            <bakery></bakery>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

