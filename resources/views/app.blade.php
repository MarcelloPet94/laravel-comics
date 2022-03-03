<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel comics</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">        
    </head>
    <body>
        @include('partials.header')
        @include('product')
        @include('strip')
        @include('footer')
        @include('social')
    </body>
</html>
