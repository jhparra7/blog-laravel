@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">En esta pagina puedes crear un curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre :
            <br>
            <input type="text" name="name">
        </label>
        <label>
            <br>
            Descripción :
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <label>
            <br>
            Categoria :
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">
            Enviar Formulario
        </button>
    </form>
@endsection