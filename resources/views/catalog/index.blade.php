@extends('layout.master')
@section('content')
    <div class="row">
    @foreach($arrayPeliculas as $key => $pelicula)
    <div class="col-xs-6 col-sm col-md-3 text-center">
        <a href="{{ url('catalog/show/' . $key)}}">
            <img src="{{$pelicula['poster']}}" style="height:200px" alt="imagen">
            <h4>{{$pelicula['title']}}</h4>
        </a>
    </div>
    @endforeach
    </div>
@stop 