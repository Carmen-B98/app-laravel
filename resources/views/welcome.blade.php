<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{setting('site.title')}}</title>

        @vite(['resources/css/app.scss','resources/css/app.css','resources/js/app.js','resources/js/home.js'])
    </head>
    <body>
      <div><p class="text-success">Test</p></div>
    </body>
</html>
