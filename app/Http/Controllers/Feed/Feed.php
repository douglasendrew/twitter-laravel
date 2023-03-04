<?php

    namespace App\Http\Controllers\Feed;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use App\Models\PublicationsModel;
    use App\Http\Controllers\Feed\User;

    class Feed extends Controller
    {

        public function index()
        {
            $publications = new PublicationsModel();
            $pubs = $publications->getPublicationsFromIFollow();

            $name = Auth::user()->name;

            if (empty((new User)->getArrobaUser())) {
                return redirect('/profile/me');
            }

            return view('feed.feed', ['name' => $name, 'publications' => $pubs]);
        }
    }
