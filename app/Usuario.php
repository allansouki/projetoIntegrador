<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "usuario_id";
    public $timestamps = false;    
}
