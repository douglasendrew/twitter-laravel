<?php

    namespace App\Http\Controllers;

    class Main extends Controller 
    {
        public function index()
        {
            return view('main.main');
        }

        public function login()
        {
            return view('main.login');
        }
    }