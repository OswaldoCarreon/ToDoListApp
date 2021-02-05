$(document).ready(function () {
    
    $('#newTask').click(function () {

        console.log("Hola mundo");
        var dataObj = {
            "titulo": $('#tituloTarea').val(),
            "tarea": $('#descripcionTarea').val(),
        }
        $.ajax({
            url: '/tareas/newAjax',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: 'POST',
            dataType: "json",
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });


});