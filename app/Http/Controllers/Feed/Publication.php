<?php

    namespace App\Http\Controllers\Feed;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    class Publication extends Controller
    {

        /**
         * Insere uma nova publicaçao
         */
        public function newPublication(Request $request)
        {
            $request->validate([
                'content' => 'required|min:3'
            ]);

            DB::table('publicacoes')->insert([
                ['content' => $request->content, 'id_author' => Auth::id()]
            ]);

            return redirect()
                ->back()
                ->with('success', 'Publicado com sucesso');
        }
    }
