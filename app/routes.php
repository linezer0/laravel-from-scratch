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
    /* First way to add a user
    !! Remember to add the $timestamps = false line to the User model to indicate we don't want to use timestamps
    */
//    $user = new User;
//    $user->username = 'william@iaelyon.fr';
//    $user->password = Hash::make('william');
//    $user->save();

    /* Second way to add a user
    !! Remember to add the $fillable variable assigned to the User model to indicate the fields we want to mass assign
    */
//    User::create( [
//        'username' => 'sanae@iaelyon.fr',
//        'password' => Hash::make('sanae')
//    ]);

    // Way to update a User
//    $user  = User::find(2);
//    $user->username = 'salma@iaelyon.fr';
//    $user->save();

    // Delete a user
//    $user = User::find(2);
//    $user->delete();

    // users ordered by username
//    return User::orderBy('username', 'asc')->get();

    return User::all();
});