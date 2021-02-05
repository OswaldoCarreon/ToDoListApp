<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand mx-2" href="/" style="color: #ff0080">Mosby To Do List</a>
            <button class="navbar-toggler m-2" style="margin-left:auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="margin-left:auto"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left:auto;">
                    <li class="nav-item p-2" style="margin-left:auto;">
                        <a href="https://github.com/OswaldoCarreon/ToDoListApp" target="_blank">
                            <img src="img/github.png" alt="" style="width:30px; margin-top:5px; margin-right:10px;">
                        </a>
                    </li>
                    <li class="nav-item p-2" style="margin-left:auto;">
                        <a href="https://www.linkedin.com/in/oswaldo-raúl-carreón-silva-277847174/" target="_blank">
                            <img src="img/linkedin.png" alt="" style="width:30px; margin-top:5px; margin-right:10px;">
                        </a>
                    </li>
                        
                    @if( session('is_logged') !== null ) {{-- Ya está logeado --}}
                        <li class="nav-item p-2" style="margin-left:auto;"><a class="nav-link active" href="/">{{session('username')}}</a></li>
                        <li class="nav-item p-2" style="margin-left:auto;"><a class="nav-link active" href='{{route('logout')}}'>Log out</a></li>
                    @else
                        <li class="nav-item p-2" style="margin-left:auto;"><a class="nav-link active" href='{{route('login')}}' >Log in</a></li>
                        <li class="nav-item p-2" style="margin-left:auto;"><a class="nav-link active" href='{{route('signup')}}'>Sign up</a></li>  
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    

    @yield('content')

    
    <footer class="p-4 d-flex justify-content-center " style="background: #e9e9e9ec; margin-top:200px;">
        <strong style="color:rgb(0, 0, 0);"> &copy; Mosby </strong> 
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>