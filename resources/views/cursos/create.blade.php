@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">En esta pagina puedes crear un curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre :
            <br>
            <input type="text" name="name" value={{ old('name')}}>
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
            <input type="text" name="slug" value={{ old('slug')}}>
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
            <textarea name="description" rows="5">{{ old('categoria')}}</textarea>
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
            <input type="text" name="categoria" value="{{ old('categoria')}}">
        </label>

        @error('categoria')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <br>
        <button type="submit">
            Enviar Formulario
        </button>
    </form>
@endsection