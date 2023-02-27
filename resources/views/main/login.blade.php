{{-- Page Name --}}
@section('title', 'Login')

{{-- Login Page Content --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/twitter-logo.png') }}" type="image/x-icon">
    
    {{-- Main Includes --}}
    @extends('base.includes')

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    <div class="container text-center mt-5" style="max-width: 600px">

        <div class="border">

            <img src="{{ asset('img/twitter-logo.png') }}" alt="" width="50"
                class="mt-5">

            <form action="{{ route('post_route_login') }}" method="post">

                {{ csrf_field() }}

                <h3 class="mt-4 mb-5"><b>Entrar no Twitter</b></h3>
                <div class="row p-5 pt-0">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                autocomplete="off" name="email">
                            <label for="floatingInput">Celular, email ou nome de usuario</label>
                        </div>
                    </div>
    
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInput" placeholder="Senha"
                                name="password">
                            <label for="floatingInput">Senha</label>
                        </div>
                    </div>
    
                    <div class="col-12">
                        <input type="submit" value="Avançar" class="btn btn-primary w-100">
                    </div>

                    <div class="col-12 mt-4 mb-4">
                        <div class="separator">Ou</div>
                    </div>

                    <div class="col-12">
                        <a class="btn btn-info w-100"
                            href="/singup">Criar Conta</a>
                    </div>

                </div>
            </form>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="col-12 alert alert-danger mt-2" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>