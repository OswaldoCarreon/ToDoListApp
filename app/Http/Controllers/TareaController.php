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
}
