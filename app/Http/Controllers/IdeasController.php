<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdeasModel;

class IdeasController extends Controller
{
    public function index()
    {

        return view('Ideas.ideasView', ["ideas" => IdeasModel::all()]);   
    }
}
