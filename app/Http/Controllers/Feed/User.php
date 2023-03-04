<?php
    namespace App\Http\Controllers\Feed;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    class User {

        public function __construct()
        {
            // 
        }

        /**
         *  Função responsavel por pegar o @ do usuario
         */
        public function getArrobaUser()
        {
            $selectArroba = DB::table('users')
                ->select('arroba')
                ->where('id', '=', Auth::id())
                ->get();
                
            if(!empty($selectArroba))
            {
                return $selectArroba->first()->arroba;
            }

            return null;
        }


        /**
         * Pegar as publicações do usuario
         */
        public function getPublicationsUser() {
            return DB::table('publicacoes')
                ->select('users.*', 'publicacoes.*')
                ->join('users', 'publicacoes.id_author', '=', 'users.id')
                ->where('id_author', '=', Auth::id())
                ->get();
        }

    }