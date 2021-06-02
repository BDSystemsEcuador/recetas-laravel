@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
@section('content')
<div class="container">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="">Agrega tu receta</h1>
        <a href="{{route('recetas.index')}}" class="btn btn-danger">Volver</a>
    </div>
    <div class="p-5">

        <form method="POST" action="{{route('recetas.store')}}" class="form" enctype="multipart/form-data" novalidate>
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
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}"
                    {{old('categoria')== $categoria->id?'selected':''}}
                    >{{$categoria->nombre}}</option>
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
            <div class="form-group">
                <label class="form-label" for="ingredientes">Ingredientes:</label>
                <input class="" id="ingredientes" type="hidden" name="ingredientes" value="{!!old('ingredientes')!!}">
                <trix-editor class="trix-content form-control @error('ingredientes')is-invalid @enderror" input="ingredientes"></trix-editor>
                @error('ingredientes')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="preparacion">Preparacion:</label>
                <input class="" id="preparacion" type="hidden" name="preparacion" value="{!!old('preparacion')!!}">
                <trix-editor class="form-control trix-content @error('preparacion')is-invalid @enderror" input="preparacion"></trix-editor>
                @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file @error('imagen') is-invalid @enderror" id="imagen" name="imagen">
                @error('imagen')
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
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
