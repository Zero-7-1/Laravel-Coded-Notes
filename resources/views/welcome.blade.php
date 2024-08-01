<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
     <h1> Hello From PHP </h1>
     <h2> Name: {{ $name }}</h2>
     <h2> Country: {{ $country }} </h2>
    </body>
</html>


<?php 
/*
Blade - is the template engine for laravel 
It helps in several way like appending dynamic contents directly to html
without php tags for example we can use any php variable inside html using 
{{ }}, we can use control statements without using php tag simply using @if, @endif,
@foreach, @endforeach, etc. 
*/

?> 