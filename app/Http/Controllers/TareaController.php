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

        $data = $request->all();
        $tittle = $data['titulo'];
        $task = $data['tarea'];

        $newTask = new TareasModel();
        $newTask->titulo = $tittle;
        $newTask->tarea = $task;
        $newTask->user_id = (UsuariosModel::where('user', session('username'))->first())->id;
        $newTask->save();

        $response['success'] = true;

        return response()->json($response);



        
        /* $user_id = UsuariosModel::where('user', session('username'))->first()->id;
        $newTask = new TareasModel(); */

        /* $newTask->titulo = $titulo;
        $newTask->tarea = $tarea;
        $newTask->user_id = $user_id; 
        $newTask->save()
        */

        //return response()->json([$user_id]);
    }

    public function show($id)
    {
        return "tarea numero " . $id;
    }

    public function destroy($id)
    {

        TareasModel::destroy($id);
        return response()->json(array(
            "success" => true,
            "data" => array(),
        ));
    }
}
