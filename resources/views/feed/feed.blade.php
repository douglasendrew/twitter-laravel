{{-- Header Page --}}
@extends('base.header')

{{-- Page Title --}}
@section('title', 'Home')


@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="mt-2" 
            style="max-width: 700px">

            <div class="pt-3 pb-5">
                <h5 class="ms-3"><b>Home</b></h5>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-2">
                    <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="" class="rounded-circle
                    mt-1 ms-5" width="50">
                </div>
                <div class="col-10">
                    <form action="{{ route('new_publication') }}" method="post"> @csrf
                        <textarea name="content" id=""
                            class="area-tweet form-control " placeholder="What's happening?"></textarea>
                        <hr>
                    
                        <div class="text-end">
                            <input type="submit" value="Tweet" class="btn btn-tweet text-white">
                        </div>
                    </form>
    
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            @if ( count($publications) > 0 )
                @foreach ($publications as $publication)
                    <div class="d-flex flex-row mt-4 pb-4 border-bottom text-break">
                        <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="" class="rounded-circle
                        mt-1 ms-5" width="50" height="50">
                        
                        <div class="ms-3 mt-2">
                            <b>{{ $publication->name }}</b> {{ '@'.$publication->arroba }}
                            <br>
                            <div class="text-break">
                                {{ $publication->content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection