@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">En esta pagina puedes Editar un curso</h1>
    <form action="{{ route('cursos.update',$curso) }}" method="POST">

        @csrf

        @method("PUT")

        <label>
            Nombre :
            <br>
            <input type="text" name="name" value = "{{ old('name', $curso->name) }}">
        </label>

        @error('name')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <label>
            <br>
            Slug :
            <br>
            <input type="text" name="slug" value={{ old('slug', $curso->slug)}}>
        </label>

        @error('slug')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <label>
            <br>
            Descripción :
            <br>
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>

        @error('description')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <label>
            <br>
            Categoria :
            <br>
            <input type="text" name="categoria" value = "{{ old('categoria', $curso->categoria) }}">
        </label>

        @error('categoria')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <br>
        <button type="submit">
            Actualizar Formulario
        </button>
    </form>
@endsection