<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;
use App\Models\TareasModel;

class TareaController extends Controller
{
    public function index()
    {
        if (session('username') === null) return redirect('/login');

        $tareas = (UsuariosModel::where('user', session('username'))->first())->tareas;

        return view('Tareas.tareasView', ["tareas" => $tareas]);
    }

    public function addTask(Request $request)
    {
        if (session('username') === null) return redirect('/login');
        $response = array(
            "created" => false,
            "data" => "",
        );

        return response()->json([$request->all()]);
        /* $user_id = UsuariosModel::where('user', session('username'))->first()->id;
        $newTask = new TareasModel(); */

        /* $newTask->titulo = $titulo;
        $newTask->tarea = $tarea;
        $newTask->user_id = $user_id; 
        $newTask->save()
        */

        //return response()->json([$user_id]);
    }
}
