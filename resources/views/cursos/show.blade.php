@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">Bienvenido al curso de {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}" class="text-teal-600">Volver a Cursos</a>
    <br>
    <a href="{{ route('cursos.edit',$curso) }}" class="text-teal-600">Editar Curso</a>
    <p><strong>Categoria : </strong>{{ $curso->categoria}}</p>
    <p>{{ $curso->description }}</p>
@endsection