<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes(['login' => false]);

Route::post('/login', function( ){
    $email = \Request::get('email');
    $password = \Request::get('password');
    

    if (\Auth::attempt([
        'email' => $email,
        'password' => $password
    ])) {
        return response()->json('', 204 );
    }else{
        return response()->json([
            'error' => 'invalid_credentials',
            'data'  => "Wrong Credentials"
        ], 403);
    }
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/webhook/callrail', function( Request $request ){
    return $request->all();
});
