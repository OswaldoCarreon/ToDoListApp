@extends('layouts.layout')


@section('title', 'pene'){{-- $tarea->titulo) --}}


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
        <a href="/tareas"><i class="fa fa-arrow-left" style="font-size:35px; margin-bottom:50px;"></i></a>
        <div class="row">
            <div class="col-9">
                <h1>Editar</h1>
            </div>
        </div>

        <div class="container-fluid" style="margin-top:50px;">
            <form method="POST" action='{{route('tareas.update',$tarea->id)}}'>
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="tituloTrea">Titulo</label>
                  <input type="text" id="tituloTarea" class="form-control" name="titulo" value="{{$tarea->titulo}}" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="form-group" style="margin-top:10px;">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" id="descripcionTarea" name="tarea" rows="10">{{$tarea->tarea}}</textarea>
                </div>
                
                <div class="form-group text-center" style="padding:10px;">
                    <button type="button" class="btn" id="cancelUpdate" style="background-color:#00A6D6;">Cancelar</button>
                    <button type="submit" class="btn" style="background-color:#ff0080d3;">Guardar</button>
                </div>
                
              </form>
              
        </div>
     
    </div>
    
    <script src="/js/tareas.js"></script>

@endsection()