@extends('layouts.app')


@section('content')
    <div class="main-fumetti">
        @foreach ($fumetti as $indice => $info)
        <div class="singolo-fumetto">
            <div class="ritaglio">
                <img src="{{$info['thumb']}}">
            </div>
            <p>{{$info['title']}}</p>
        </div>
        @endforeach
    </div>


@endsection