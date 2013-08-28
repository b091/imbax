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

Route::get(
    '/{page?}.html',
    function ($page = null) {

        return View::make('templates.rss.home')
            ->with('menu', Menu::all())
            ->with('content', 'TRESC')
            ->with('currentpage', $page)
            ->with('content', Menu::where('pagelink', '=', $page.'.html')->firstOrFail()->content)
            ->with('product', Product::all());
    }
);


Route::get(
    '/users',
    function () {
        $users = User::all();

        return View::make('users')->with('users', $users);
    }
);

Route::get(
    '/dashboard',
    array(
        'before' => 'auth',
        function () {
            return View::make('admin.dashboard');
        }
    )
);


Route::get(
    '/login',
    function () {
        return View::make('admin.login');
    }
);


Route::post(
    '/login',
    function () {
        // Validation? Not in my quickstart!
        // No, but really, I'm a bad person for leaving that out
        Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));

        return Redirect::to('/dashboard');
    }
);


Route::group(
    array('before' => 'auth'),
    function () {
        \Route::get('elfinder', 'Barryvdh\ElfinderBundle\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\ElfinderBundle\ElfinderController@showConnector');
    }
);
