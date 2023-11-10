@extends('layouts.plantilla')

@section('title', 'Principal')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">Cursos Registrados</h1>
    <a href="{{route('cursos.create')}}" class="text-teal-600">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{$curso->name}}</a>
                <a href="{{ route('cursos.edit', $curso) }}">Editar</a>
                <form action="{{ route('cursos.destroy',$curso)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" 
                           class="bg-blue-500 hover:bg-blue-700 text-white 
                                  font-bold py-2 px-4 rounded-full">
                       Eliminar
                    </button>
                    <br>
                </form>
            </li>            
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection