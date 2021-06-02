@extends('layouts.app')
@section('styles')
<style>
.body{
    background: rgba(241, 232, 192, 0.199);
    border: 1px solid rgba(48, 48, 48, 0.11);
    border-radius: 5px;
    max-width:800px;
    padding: 30px;
    margin: auto;
}
.receta__img{
    display: block;
    height:400px;
    width: 100%;
    margin: auto;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 0 0 4px rgb(255, 255, 255);
}
.receta__info{
    margin:30px auto;
}
</style>
@endsection
@section('content')
<div class="body">
    <h1 class="text-center">{{$receta->titulo}}</h1>
    <img class="receta__img" src="/storage/{{$receta->imagen}}" alt="">
    <section class="receta__info">
        <p><span class="text-danger fw-bolder">Escrito en: </span>{{$receta->categoria->nombre}}</p>
        <p><span class="text-danger fw-bolder">Autor: </span>{{$receta->user->name}}</p>
        @php
            $fecha = $receta->created_at;
        @endphp
        <fecha-receta></fecha-receta>

    </section>
    <section class="receta__info">
        <h4 class="text-danger fw-bolder">Ingredientes</h4>
        {!!$receta->ingredientes!!}
    </section>
    <section class="receta__info">
        <h4 class="text-danger fw-bolder">Preparación</h4>
        {!!$receta->preparacion!!}
    </section>

</div>
@endsection
