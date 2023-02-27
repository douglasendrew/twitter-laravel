<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PublicationsModel extends Model
{
    
    public function getPublicationsFromIFollow()
    {
        return DB::table('publicacoes')
            ->join('users', 'publicacoes.id_author', '=', 'users.id')
            ->select('publicacoes.*', 'users.name', 'users.arroba')
            ->where('excluido', '=', '0')
            ->orderBy('date_create', 'desc')
            ->get();
    }

}
