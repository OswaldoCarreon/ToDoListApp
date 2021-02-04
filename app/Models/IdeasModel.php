<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeasModel extends Model
{
    public $timestamps = false;
    protected $table = "ideas";



    public function user()
    {
        return $this->belongsTo('App\Models\UsuariosModel');
    }
}
