@extends('layouts.layout')


@section('title', 'Home')


@section('content')
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-2" href="" style="color: #ff0080">Mosby To Do List</a>
            <button class="navbar-toggler m-2" style="margin-left:auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="margin-left:auto"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left:auto;">
                    <li class="nav-item p-3" style="margin-left:auto"><a class="nav-link active" href="">{{session('username')}}</a></li>
                    <li class="nav-item p-3" style="margin-left:auto"><a class="nav-link active" href='{{route('logout')}}'>Log out</a></li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <h1 class="container-fluid text-center" style="margin-top:150px; margin-bottom:100px;">Your dashboard</h1>


    <div class="container" style="width:70%;">    
        <div class="row">
            <div class="col-12 col-md-6 p-3" align="center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/tareas.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Tareas</h5>
                    <p class="card-text">Aquí se encuentra tu lista de tareas por hacer. </p>
                    <a href="/tareas" class="btn btn-secondary">Ver mis tareas</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3" align="center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/ideas.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Ideas</h5>
                    <p class="card-text">Aquí se encuentran todas tu ideas anotadas</p>
                    <a href="/ideas" class="btn btn-secondary">Ver mis ideas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 p-3" align="center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/compras.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Compras</h5>
                    <p class="card-text">Aquí se encuentra tu list de cosas por comprar</p>
                    <a href="/compras" class="btn btn-secondary">Ver mis compras</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3" align="center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/rutina.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Rutinas</h5>
                    <p class="card-text">Aquí se encuentran todas tur rutinas</p>
                    <a href="/rutinas" class="btn btn-secondary">Ver rutinas</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection()