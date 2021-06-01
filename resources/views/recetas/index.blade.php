@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Recetas</h1>
<ul>
    @foreach ($recetas as $receta)
        <li>{{$receta}}</li>
    @endforeach
</ul>
<h1>Categorias</h1>
<ul>
    @foreach ($categorias as $categoria)
        <li>{{$categoria}}</li>
    @endforeach
</ul>

        </div>
    </div>
</div>
@endsection

