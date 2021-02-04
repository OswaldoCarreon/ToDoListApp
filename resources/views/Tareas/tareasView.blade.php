@extends('layouts.layout')


@section('title', 'Tareas')


@section('content')

    

    <div class="container" style="margin-top:100px;">
        <h1>Tareas</h1>

        @if(count($tareas) === 0)
            <p>Parece que aun no tienes tareas</p>
        @else
            @foreach($tareas as $tarea)
                <p>Titulo: {{$tarea->titulo}}</p>
                <p>Tarea: {{$tarea->tarea}}</p>
            @endforeach
        @endif
    </div>
    

@endsection()