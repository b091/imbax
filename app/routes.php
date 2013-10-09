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
Route::get('/{lang}/{page?}', 'HomeController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));



    //->where('page', '(.*\.html)');
//Route::get('/{page?}', 'HomeController@index')->where('page', '(.*\.html)');
Route::get('/', 'HomeController@index');

Route::get(
    '/admin/dashboard.html',
    array(
        'before' => 'auth',
        function () {
            return View::make('admin.dashboard');
        }
    )
);

Route::get(
    '/admin.html',
    function () {
        return View::make('admin.login');
    }
);

Route::post(
    '/admin.html',
    function () {
        // Validation? Not in my quickstart!
        // No, but really, I'm a bad person for leaving that out
        Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));

        return Redirect::to('/admin/dashboard');
    }
);

Route::group(
    array('before' => 'auth'),
    function () {
        \Route::get('elfinder', 'Barryvdh\ElfinderBundle\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\ElfinderBundle\ElfinderController@showConnector');
    }
);
