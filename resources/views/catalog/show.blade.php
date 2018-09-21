@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
        <img src="{{$pelicula['poster']}}" alt="poster">
        </div>
        <div class="col-sm-8">
         <h1>{{$pelicula['title']}}</h1>
         <br>
         <span>{{$pelicula['year']}}</span>
         <br>
         <span><h5>{{$pelicula['director']}}</h5></span>
         <br>
         <p>{{$pelicula['synopsis']}}</p>
         @if($pelicula['rented'])
         <h4>Estado: Pelicula Actualmente Alquilada</h4>
         <br>
         <button class="btn btn-default btn-danger ">Devolver Pelicula</button>
         @else
         <h4>Estado: Pelicula Disponible</h4>
         <br>
         <button class="btn btn-default btn-primary " >Alquilar Pelicula</button>
         @endif
         
         <a href="{{ url('catalog/edit/')}}" class="btn btn-default btn-warning">Editar Pelicula</a>
         <a href="/catalog" class="btn btn-default btn-info">Volver</a>
         

        </div>
    </div>

@stop