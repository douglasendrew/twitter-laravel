<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/twitter-logo.png') }}" type="image/x-icon">

    {{-- Main Includes --}}
    @extends('base.includes')
    
    {{-- Outhers Includes --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    
    {{-- Loader=>>Init --}}
    <style>
        body {overflow: hidden;}
    </style>

    <div style="position: fixed; top:0; bottom: 0; width: 100%; z-index: 999999; background: white;" id="loader">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/twitter-logo.png') }}" alt="" width="60" id="img_loader">
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("body").css("overflow", "auto");
            setTimeout(function() {
                $('#loader').fadeOut(200);
            }, 500);
        });
    </script>
    {{-- Loader=>>End --}}


    <nav class="navbar p-3 fixed-top border-bottom" style="backdrop-filter: blur(5px);">

        <div class="navbar-brand">
            <a href="{{ route('feed') }}">
                <img src="{{ asset('img/twitter-logo.png') }}" alt="" width="35" class="ms-5">
            </a>
        </div>

        <div class="d-flex">
            <a href="/profile/me" class="me-4 mt-1">
                <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="" width="40" class="ms-5 rounded-circle">
            </a>
            <a href="/singin/logout" class="btn btn-tweet ps-3 pe-3">Sair</a>
        </div>

    </nav>

    <div class="container" style="padding-top: 70px;">
        @yield('content')
    </div>


@extends('base.footer')