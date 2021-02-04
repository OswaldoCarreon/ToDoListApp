@extends('layouts.layout')


@section('title', 'Login')


@section('content')

<div class="d-flex justify-content-center">
    <div class="col-sm-5">
        <h2 class="px-5 mt-5 text-center">Log in</h2>
        <form class="p-5 needs-validation" action='{{route('login.auth')}}' method="POST">
            @csrf
            <div class="form-floating mb-3 ">
                <input type="text" class="form-control" name="username" value="" placeholder="username" required autocomplete="off">
                <label for="floatingInput" >Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" value="" placeholder="password" required autocomplete="off">
                <label for="floatingPassword">Password</label>
            </div>
            @if ( $error == 1 )
                <p style="color:red;">Contraseña o usuario incorrectos</p>
            @endif()
            <div class="d-flex mt-5 justify-content-center">
                <input class="btn btn-success "type="submit" value="Log in">
                <a class="mx-2 btn btn-danger me-auto" href="/">Cancel</a>
            </div>
            
        </form>

    </div>
</div>




@endsection()