$(document).ready(function () {
    
    $('#addTaskButton').click(function () {
        $('#tituloTarea').val("");
        $('#descripcionTarea').val("");
    });

    $('#newTask').click(function () {

        var title = $('#tituloTarea').val();
        var task = $('#descripcionTarea').val();


        if (title !== "" && task !== "") {
            var dataObj = {
                "titulo": title,
                "tarea": task,
            }
            $.ajax({
                url: "tareas/newAjax",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'POST',
                dataType: "json",
                data: dataObj,
                success: function (response) {
                    console.log(response);
                    $('#exampleModal').modal('toggle');

                    location.reload();
                    //var newTaskContent = '<div class="col-md-2 border" style="margin:10px; padding:0;"><div class="d-flex" style="background-color:#00b7eb; padding:10px;"><a href="/tareas/{{$tarea->id}" style="text-decoration:none; color: black;"><h3>{{$tarea->titulo}}</h3></a><button type="button" class="btn-close closeTask" aria-label="Close" data-taskId="{{$tarea->id}}" style="margin-left:auto;"></button></div><div class="body" style="padding:10px;"><p>{{$tarea->tarea}}</p></div></div>'
                    //$('#tareas-container').append(newTaskContent);


                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            $('#errMssgg').text("Llene todos los campos");

        }
    });

    $('.closeTask').click(function () {
        var taskId = $(this).data('taskid');

        $.ajax({
            url: "/tareas/destroy/" + taskId,
            type: "DELETE",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            dataType: 'json',
            success: function (data) {
                console.log("Successful");
                console.log(data);
                location.reload();
            },
            error: function (err) {
                console.log('error');
            }

        });

    });

});