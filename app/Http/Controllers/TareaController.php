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
            "success" => false,
            "data" => array(),
        );


        $newTask = new TareasModel();
        $newTask->titulo = $request->titulo;
        $newTask->tarea = $request->tarea;
        $newTask->user_id = (UsuariosModel::where('user', session('username'))->first())->id;
        $newTask->save();

        $response['success'] = true;

        return response()->json($response);
    }

    public function destroy($id)
    {

        TareasModel::destroy($id);
        return response()->json(array(
            "success" => true,
            "data" => array(),
        ));
    }

    public function editTask($id)
    {
        $task = TareasModel::where('id', $id)->first();

        return view('Tareas.updateTareaView', ["tarea" => $task]);
    }

    public function updateTask(Request $request, $id)
    {
        $curso = TareasModel::where('id', $id)->first();
        $curso->titulo = $request->titulo;
        $curso->tarea = $request->tarea;
        $curso->save();
        return redirect()->route('tareas');
    }
}
