@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">En esta pagina puedes editar un curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre :
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <label>
            <br>
            Descripción :
            <br>
            <textarea name="description" rows="5"> 
                {{ $curso->description }}
            </textarea>
        </label>
        <label>
            <br>
            Categoria :
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>
        <br>
        <button type="submit">
            Actualizar Formulario
        </button>
    </form>
@endsection