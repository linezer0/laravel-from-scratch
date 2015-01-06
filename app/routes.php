<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/about', 'PagesController@about');

Route::get('/users', function() {
    // $users = User::all(); // SELECT * FROM users
    // $user = User::find(1); // SELECT * FROM users WHERE id = 1
    // return $user->email;
});

Route::get('/', function() {
//    return DB::table('users')->get(); // SELECT * FROM users
    $users = DB::table('users')->where('username', '!=', 'thomas@iaelyon.fr')->get();
//    dd($users); // die(var_dump($users)
    return $users;
});