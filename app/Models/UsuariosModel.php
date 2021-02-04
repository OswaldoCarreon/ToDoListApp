<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "usuarios";


    //Relacion uno a muchos
    public function tareas()
    {
        return $this->hasMany('App\Models\TareasModel', 'user_id', 'id');
    }

    //Relacion uno a muchos
    public function ideas()
    {
        return $this->hasMany('App\Models\IdeasModel', 'user_id', 'id');
    }

    //Relacion uno a muchos
    public function compras()
    {
        return $this->hasMany('App\Models\ComprasModel', 'user_id', 'id');
    }
}
