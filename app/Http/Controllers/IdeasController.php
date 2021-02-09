<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdeasModel;
use App\Models\UsuariosModel;



class IdeasController extends Controller
{
    public function index()
    {

        return view('Ideas.ideasView', ["ideas" => IdeasModel::all()]);   
    }


    public function create(Request $request)
    {

        $newIdea = new IdeasModel();
        $newIdea->titulo = $request->titulo;
        $newIdea->idea = $request->idea;
        $newIdea->user_id = UsuariosModel::where('user', session('username'))->first()->id;
        $newIdea->save();

        $response = array(
            "success" => true,
            "data" => ""
        );

        return response()->json($response);
    }

    public function delete($id)
    {
        IdeasModel::destroy($id);
        return response()->json(array(
            "success" => true,
            "data" => array(),
        ));
    }

    public function edit($id)
    {
        $idea = IdeasModel::where('id', $id)->first();
        return view('Ideas.updateIdeasView', ["idea" => $idea]);
    }

    public function update(Request $request, $id)
    {
        $idea = IdeasModel::where('id', $id)->first();
        $idea->titulo = $request->titulo;
        $idea->idea = $request->idea;
        $idea->save();

        return redirect()->route('ideas');
    }
}
