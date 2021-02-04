<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprasModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'compras';

    public function user()
    {
        return $this->belongsTo('App\Models\UsuariosModel');
    }
}
