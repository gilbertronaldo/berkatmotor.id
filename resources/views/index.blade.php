<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description"
          content="Berkat Motor | Distributor Oracal, Dcfix, 3M, Scotchlite, Window film, Sandblast, Vinyl Sticker, Safety marking truck, Glow in the dark, etc.">
    <meta name="keywords"
          content="Berkat Motor, berkatmotor, berkatsticker, Berkat Sticker, Berkat, Sticker, Stiker, Oracal, 3M, Scotchlite, Dcfix, Sandblast, Glassmate, ORACAL, Window, Film, Vinyl, Safety marking truck, Glow in the dark">
    <meta name="author" content="Gilbert Ronaldo, gilbert@ronaldo.id">
    <meta name="copyright" content="berkatmotor.id">
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="url" content="http://berkatmotor.id">
    <meta name="identifier-URL" content="http://berkatmotor.id">

    <title>Berkat Motor | Sticker Oracal Indonesia</title>

    @include('includes.styles')
</head>
<body data-offset="50" data-spy="scroll" data-target=".navbar">

<!--loader start-->
<div class="loader-wrapper">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--loader end-->

@include('layouts.header')

@yield('content')

@include('layouts.footer')

@include('includes.scripts')
</body>
</html>
