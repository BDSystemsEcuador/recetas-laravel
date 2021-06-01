@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="">Agrega tu receta</h1>
        <a href="{{route('recetas.index')}}" class="btn btn-danger">Volver</a>
    </div>
    <div class="p-5">

        <form method="POST" action="{{route('recetas.store')}}" class="form" novalidate>
            @csrf
            <div class="form-group">
                <label class="form-label" for="titulo">Título Receta</label>
                <input type="text" class="form-control
                @error('titulo')
                is-invalid
                @enderror" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Título de la receta">
                @error('titulo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="categoria">Categorias:</label>
                <select name="categoria" id="categoria" class="form-control
                @error('categoria')
                is-invalid
                @enderror
                ">
                    <option value="">--Seleccione--</option>
                    @foreach ($categorias as $id => $categoria)
                    <option value="{{$id}}"
                    {{old('categoria')== $id?'selected':''}}
                    >{{$categoria}}</option>
                    @endforeach
                </select>
                @error('categoria')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-danger" type="submit">Agregar Receta</button>
        </form>
    </div>
    </div>
@endsection
