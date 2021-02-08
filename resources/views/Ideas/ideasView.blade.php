@extends('layouts.layout')


@section('title', 'Ideas')


@section('content')

    <h1>Ideas view</h1>

    <div class="container" style="margin-top:50px;">
        <a href="/"><i class="fa fa-arrow-left" style="font-size:35px; margin-bottom:50px;"></i></a>
        <div class="row">
            <div class="col-9">
                <h1>Ideas</h1>
            </div>

            <div class="col-2">
                <a style="margin-left:20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img id="addTaskButton" src="https://img.icons8.com/flat_round/64/000000/add-file.png"/>
                </a>
            </div>
        </div>
     
    
        @if(count($ideas) === 0)
            <p style="padding:100px;">:) Parece que no tienes tareas</p>
        @else
            <div class="row" id="tareas-container" style="margin-top:70px; maring-right:0; width:99.5%">
            @foreach($ideas as $idea)
                <div class="col-md-6 border" style="margin:10px; padding:0;">
                    <div class="d-flex" style="background-color:#00b7eb; padding:10px;">
                        <a href="{{route('tareas.show',$tarea->id)}}" style="text-decoration:none; color: black;">
                            <h3>{{$idea->titulo}}</h3>
                        </a>
                        <button type="button" class="btn-close closeTask" aria-label="Close" data-taskId="{{$tarea->id}}" style="margin-left:auto;"></button>
                    </div>
                    <div class="body" style="padding:10px;">
                        <p>{{$idea->idea}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </div>

@endsection()