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

    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>

    <nav class="navbar p-3 fixed-top border-bottom" style="backdrop-filter: blur(5px);">

        <div class="navbar-brand">
            <img src="{{ asset('img/twitter-logo.png') }}" alt="" width="35" class="ms-5">
        </div>

        <div class="d-flex">
            <a href="/singin/logout" class="btn btn-tweet ps-3 pe-3">Sair</a>
        </div>

    </nav>

    <div class="container" style="padding-top: 70px;">
        @yield('content')
    </div>


@extends('base.footer')