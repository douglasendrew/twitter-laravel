<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Feed\Feed;
use App\Http\Controllers\Feed\Publication;
use App\Http\Controllers\Login\LoginUser;
use App\Http\Controllers\Main;


// Routes of singup of user
Route::prefix('/singup')->group(function() {
    Route::get('/', function() {
        return view('main.singup');
    });
    
    Route::post('/create-account', [LoginUser::class, 'createAccount'])
        ->name('post_route_create_account');
});


// Routes of singin of user
Route::prefix('/singin')->group(function() {
    Route::get('/', [Main::class, 'login']);

    Route::post('/login-account', [LoginUser::class, 'userLogon'])
        ->name('post_route_login');

    Route::get('/logout', [LoginUser::class, 'userLogoff']);
});


// Index
Route::get('/', function() {
    if(auth()->check())
    {
        return redirect('/feed');
    }
    return redirect('/singin');
})->name('index');


// Publications feed
Route::get('/feed', [Feed::class, 'index']);


// Rotas para publicaçoes
Route::prefix('publication')->group(function() {
    Route::post('new', [Publication::class, 'newPublication'])->name('new_publication');
});