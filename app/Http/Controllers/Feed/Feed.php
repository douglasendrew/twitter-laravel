<?php

    namespace App\Http\Controllers\Feed;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use App\Models\PublicationsModel;

    class Feed extends Controller {
        
        public function index()
        {

            if(auth()->check())
            {
                $publications = new PublicationsModel();
                $pubs = $publications->getPublicationsFromIFollow();

                $name = Auth::user()->name;
                return view('feed.feed', ['name' => $name, 'publications' => $pubs]);
            }

            return redirect('/singin');
        }

    }