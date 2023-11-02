@extends('layouts.plantilla')

@section('title', 'Principal')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">Bienvenido a la pagina Principal</h1>
    <a href="{{route('cursos.create')}}" class="text-teal-600">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}">{{$curso->name}}</a>
            </li>            
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection