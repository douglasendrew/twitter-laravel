{{-- Header Page --}}
@extends('base.header')

{{-- Page Title --}}
@section('title', 'Meu Perfil')


@section('content')
    <div class="container ">
        <div  style="margin-top: 9px;">
            <div class="w-100" style="background: rgb(207, 217, 222); width:100%px !important; height:200px !important; margin-top: 1px;">
                <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="" class="rounded-circle border border-white
                    mt-1 ms-3" width="130" height="130" style="margin-top: 110px !important;">
            </div>
        </div>

        <div class="mt-5">
            <h2><b>{{ $name_user }}</b></h2>
            <p>{{ '@'.$arroba_user }}</p>
        </div>

        <div class="mt-5">
            <b><h4>Tweets</h4></b>
        </div>

        @foreach ($publications_user as $item)
            <div class="d-flex flex-row mt-4 pb-4 border-bottom text-break">
                <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="" class="rounded-circle
                mt-1 ms-5" width="50" height="50">
                
                <div class="ms-3 mt-2">
                    <b>{{ $item->name }}</b> {{ '@'.$item->arroba }}
                    <br>
                    <div class="text-break">
                        {{ $item->content }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection