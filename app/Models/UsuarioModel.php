<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuarios';
}
