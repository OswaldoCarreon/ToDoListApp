@extends('layouts.layout')


@section('title', 'Welcome')


@section('content')
    
    <div class="" style="margin-top:50px; margin-bottom:100px;">
        <h1 class="container-fluid text-center mt-5" >Bienvenido a mi To Do List</h1>
    </div>
    
    

    <hr style="width: 95%; margin:auto;">
    <div class="container" style="margin-top:50px;">
        <h2>Las funcionalidades de To Do List.</h2>

        <div class="row" style="margin-top:100px; margin-bottom: 100px;">
            <div class="col-8">
                <h3>Tareas:</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem mollitia rerum consequuntur quam? Natus iusto nostrum qui animi molestias, amet earum iure! Et eius officia, provident vero ducimus minus blanditiis!
                Perferendis necessitatibus libero cumque exercitationem animi ab repellendus laboriosam vitae quibusdam pariatur blanditiis cupiditate rerum corporis deserunt repellat possimus doloribus laborum nam magnam maiores quis, dicta, quidem eum? Qui, assumenda.
                Repellat voluptates voluptatibus cumque totam laborum itaque impedit quidem. Ab recusandae accusantium labore incidunt dignissimos pariatur a iusto non temporibus maiores nesciunt, tempore voluptas neque quos, soluta ipsum laudantium consequatur?</p>
                
                <button class="btn btn-info">Echa un vistazo</button>
            </div>

            <div class="col-4">
                <img src="img/taskBanner.jpg" alt="Imagen_de_tareas" class="banner-img">
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top:150px; margin-bottom: 150px;">
            <div class="col-4">
                <img src="img/ideasBanner.jpg" alt="Imagen_de_tareas" class="banner-img">
            </div>

            <div class="col-8">
                <h3>Ideas:</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem mollitia rerum consequuntur quam? Natus iusto nostrum qui animi molestias, amet earum iure! Et eius officia, provident vero ducimus minus blanditiis!
                Perferendis necessitatibus libero cumque exercitationem animi ab repellendus laboriosam vitae quibusdam pariatur blanditiis cupiditate rerum corporis deserunt repellat possimus doloribus laborum nam magnam maiores quis, dicta, quidem eum? Qui, assumenda.
                Repellat voluptates voluptatibus cumque totam laborum itaque impedit quidem. Ab recusandae accusantium labore incidunt dignissimos pariatur a iusto non temporibus maiores nesciunt, tempore voluptas neque quos, soluta ipsum laudantium consequatur?</p>
            
                <button class="btn btn-info">Echa un vistazo</button>    
            </div>
        </div>

        <hr>
       
        <div class="row" style="margin-top:150px; margin-bottom: 250px;">
            <div class="col-8">
                <h3>Compras:</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem mollitia rerum consequuntur quam? Natus iusto nostrum qui animi molestias, amet earum iure! Et eius officia, provident vero ducimus minus blanditiis!
                Perferendis necessitatibus libero cumque exercitationem animi ab repellendus laboriosam vitae quibusdam pariatur blanditiis cupiditate rerum corporis deserunt repellat possimus doloribus laborum nam magnam maiores quis, dicta, quidem eum? Qui, assumenda.
                Repellat voluptates voluptatibus cumque totam laborum itaque impedit quidem. Ab recusandae accusantium labore incidunt dignissimos pariatur a iusto non temporibus maiores nesciunt, tempore voluptas neque quos, soluta ipsum laudantium consequatur?</p>
            
                <button class="btn btn-info">Echa un vistazo</button>
            </div>

            <div class="col-4">
                <img src="img/shoppingBanner.jpg" alt="Imagen_de_tareas" class="banner-img">
            </div>
        </div>

        
    </div>
    

@endsection()