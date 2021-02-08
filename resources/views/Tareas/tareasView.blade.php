@extends('layouts.layout')


@section('title', 'Tareas')


@section('content')
    <style>
        a:hover{
            cursor: pointer;
            color:#ff008080;
        }
        a {
            color:#ff0080d3;
        }

    </style>

    
    <div class="container" style="margin-top:50px;">
        <a href="/"><i class="fa fa-arrow-left" style="font-size:35px; margin-bottom:50px;"></i></a>
        <div class="row">
            <div class="col-9">
                <h1>Tareas</h1>
            </div>

            <div class="col-2">
                <a style="margin-left:20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img id="addTaskButton" src="https://img.icons8.com/flat_round/64/000000/add-file.png"/>
                </a>
            </div>
        </div>
     
    
        @if(count($tareas) === 0)
            <p style="padding:100px;">:) Parece que no tienes tareas</p>
        @else
            <div class="row" id="tareas-container" style="margin-top:70px; maring-right:0; width:99.5%">
            @foreach($tareas as $tarea)
                <div class="col-md-2 border" style="margin:10px; padding:0;">
                    <div class="d-flex" style="background-color:#00b7eb; padding:10px;">
                        <a href="{{route('tareas.show',$tarea->id)}}" style="text-decoration:none; color: black;">
                            <h3>{{$tarea->titulo}}</h3>
                        </a>
                        <button type="button" class="btn-close closeTask" aria-label="Close" data-taskId="{{$tarea->id}}" style="margin-left:auto;"></button>
                    </div>
                    <div class="body" style="padding:10px;">
                        <p>{{$tarea->tarea}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva tarea</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="form-group">
                      <label for="tituloTrea">Titulo</label>
                      <input type="text" id="tituloTarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                      <label for="exampleInputPassword1">Descripcion</label>
                      <textarea class="form-control" id="descripcionTarea" rows="10"></textarea>
                    </div>
                  </form>
                <p style="color:red" id="errMssgg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color:#00A6D6;"" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn" id="newTask" style="background-color:#ff0080d3;">Crear tarea</button>
            </div>
        </div>
        </div>
    </div>


    <script src="/js/tareas.js"></script>

@endsection()