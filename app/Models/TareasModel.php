<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareasModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tareas";

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\UsuariosModel');
    }
}
