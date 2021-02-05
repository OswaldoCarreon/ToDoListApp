@extends('layouts.layout')


@section('title', 'Tareas')


@section('content')
    <style>
        a:hover{
            cursor: pointer;
        }
    </style>
    <div class="container" style="margin-top:50px;">

        <div class="row">
            <div class="col-9">
                <h1>Tareas</h1>
            </div>

            <div class="col-2">
                <a style="margin-left:20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="https://img.icons8.com/flat_round/64/000000/add-file.png"/>
                </a>
            </div>
        </div>
        
    
        @if(count($tareas) === 0)
            <p style="padding:100px;">:( Parece que aun no tienes tareas</p>
        @else
            @foreach($tareas as $tarea)
                <p>Titulo: {{$tarea->titulo}}</p>
                <p>Tarea: {{$tarea->tarea}}</p>
            @endforeach
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
                      <input type="text" id="tituloTarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                      <label for="exampleInputPassword1">Descripcion</label>
                      <textarea class="form-control" id="descripcionTarea" rows="10"></textarea>
                    </div>
                  </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color:#00A6D6;"" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn" id="newTask" style="background-color:#ff0080d3;">Crear tarea</button>
            </div>
        </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/tareas.js"></script>

@endsection()