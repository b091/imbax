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
    '/{page?}',
    function ($page = null) {

        $template = $page == 'onas.html' ? 'home' : 'content';
        return View::make("templates.rss.{$template}")
            ->with('menu', Menu::all())
            ->with('content', 'TRESC')
            ->with('currentpage', $page)
            ->with('content', Menu::where('pagelink', '=', $page)->firstOrFail()->content)
            ->with('product', Product::all());
    }
)->where('page', '(.*\.html)');;

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
