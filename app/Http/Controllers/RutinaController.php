<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index()
    {
        return view('Rutinas.rutinasView');
    }
}
