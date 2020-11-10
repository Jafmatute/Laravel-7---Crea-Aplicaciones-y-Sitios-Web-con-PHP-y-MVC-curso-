
@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" />
@endsection

@section('botones')
<a href="{{route('recetas.index')}}" class="btn btn-primary mr-2">Atrás </a>
@endsection

@section('content')

<h2 class="text-center mb-5"> Crear nueva receta </h2>

<div class="row justify-content-center mt-5">
   <div class="col-md-8">
   <form action="{{route('recetas.store')}}" method="post" enctype="multipart/form-data" novalidate>
    @csrf
           <div class="form-group">
               <label for="titulo">Título Receta</label>
               <input
               type="text"
               name='titulo'
               id='titulo'
               class="form-control @error('titulo') is-invalid @enderror"
               placeholder="Título receta"
               value="{{old('titulo')}}" >
                @error('titulo')
                    <span class="invalid-feedback d-block">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select name="categoria" class="form-control @error('categoria') is-invalid @enderror " id="categoria">
                    <option value="">--Seleccione--</option>
                    @foreach($categorias as $key => $categoria)
                <option value="{{$key}}" {{old('categoria') ==$key ? 'selected' : ''}} >{{$categoria}}</option>
                    @endforeach
                </select>
                @error('categoria')
                <span class="invalid-feedback d-block">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="preparacion">Preparación</label>
            <input type="hidden" id="preparacion" name="preparacion" value="{{old('preparacion')}}">
            <trix-editor class=" form-control @error('preparacion') is-invalid @enderror" input="preparacion">
            </trix-editor>

            @error('preparacion')
            <span class="invalid-feedback d-block">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
            <div class="form-group mt-4">
                <label for="ingredientes">Ingredientes</label>
            <input type="hidden" id="ingredientes" name="ingredientes" value="{{old('ingredientes')}}">
            <trix-editor class=" form-control @error('ingredientes') is-invalid @enderror" input="ingredientes">
            </trix-editor>
            @error('ingredientes')
            <span class="invalid-feedback d-block">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>

            <div class="form-group mt-3">
                <label for="imagen">Imagen Receta</label>
                <input
                type="file"
                name="imagen"
                class="form-control @error('imagen') is-invalid @enderror"
                id="imagen" >
                @error('imagen')
                <span class="invalid-feedback d-block">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
            </div>
           <div class="form-group">
               <input type="submit" class="btn btn-primary" value="Agregar Receta">
           </div>
       </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.js" integrity="sha512-9JcmG1JOs44Iob11CgdOsTJdYnzXVlZsEmt5hsX+4uQYCKkitcCuwgSIkHpm0ATqBgvdSA1pJsYwt9HdPEb1Nw==" crossorigin="anonymous"></script>
@endsection
