<?php

    namespace App\Http\Controllers\Login;

    use App\User;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;

    class LoginUser extends Controller {

        public function userLogoff()
        {
            Session::flush();
            Auth::logout();
    
            return redirect('/singin');
        }

        public function userLogon(Request $req)
        {
            $req->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $credenciais = $req->only('email', 'password');
            if(Auth::attempt($credenciais)) 
            {
                return redirect()->intended('/feed');
            }

            return redirect()
                ->back()
                ->withErrors('Login nao efetuado, email ou senha incorreto');
        }


        // Create Account 
        public function createAccount(Request $request) 
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ]); 

            $user = new User;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('/feed');
        }

    }