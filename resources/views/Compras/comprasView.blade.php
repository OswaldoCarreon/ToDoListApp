@extends('layouts.layout')

@section('title', 'Compras')

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
        <div class="row text-center">
            <div class="col-9">
                <h1 style="margin-left:-75%;">Compras</h1>
            </div>

            <div class="col-2" style="">
                <a style="margin-left:0px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img id="addTaskButton" src="https://img.icons8.com/flat_round/64/000000/add-file.png"/>
                </a>
            </div>
        </div>
     


        <div class="container" style="margin-top:100px;">
            @if(count($compras) === 0)
                <p style="padding:100px;">:) Parece que no tienes compras</p>
            @else
            <div class="row justify-content-center">
                @foreach($compras as $compra)
                    <div class="col-lg-3 col-md-5" style="border: 1px solid rgb(223, 223, 223); margin:10px; padding: 0;">
                        <div class="d-flex" style="background-color:#00b7eb; padding:5px; margin:0; ">

                            <a href="{{route('ideas.edit',$compra->id)}}" style="text-decoration:none; color: black;">
                                <h3>{{$compra->titulo}}</h3>
                            </a>
                            <button type="button" class="btn-close deleteIdea" aria-label="Close" data-id="{{$compra->id}}" style="margin-left:auto;"></button>

                        </div>

                        <div class="body" style="padding:10px;">
                            <p>{{$compra->compra}}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
            @endif
        </div>
    </div>


    {{-- Modal --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="form-group">
                      <label for="tituloTrea">Titulo</label>
                      <input type="text" id="tituloCompra" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                      <label for="exampleInputPassword1">Compras</label>
                      <textarea class="form-control" id="descripcionCompra" rows="10"></textarea>
                    </div>
                  </form>
                <p style="color:red" id="errMssgg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color:#00A6D6;"" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn" id="createCompra" style="background-color:#ff0080d3;">Crear compra</button>
            </div>
        </div>
        </div>
    </div>

    <script src="/js/compras.js"></script>
@endsection()