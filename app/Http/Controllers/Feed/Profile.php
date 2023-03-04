<?php

    namespace App\Http\Controllers\Feed;

    use App\Http\Controllers\Feed\User;
    use Illuminate\Support\Facades\Auth;

    class Profile  {
        
        public function myProfile()
        {
            $user = new User();
            return view('feed.myProfile', ['name_user' => Auth::user()->name, 'arroba_user' => $user->getArrobaUser(), 'publications_user' => $user->getPublicationsUser()]);
        }

    }