<?php

namespace App\Http\Controllers;

use App\Models\ComprasModel;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {

        $compras = UsuariosModel::where('user', session('username'))->first()->compras;
        return view('Compras.comprasView', ["compras" => $compras]);
    }

    public function create(Request $request)
    {
        $newCompra = new ComprasModel();
        $newCompra->titulo = $request->titulo;
        $newCompra->compra = $request->compra;
        $newCompra->user_id = UsuariosModel::where('user', session('username'))->first()->id;

        $newCompra->save();

        $response = array(
            "success" => true,
            "data" => ""
        );

        return response()->json($response);
    }
}
