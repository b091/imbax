<?php

Route::get('/{lang}/{page?}', 'HomeController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::get('/', 'HomeController@index');

Route::get('/admin/{lang}/{page?}', 'AdminController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::post('/admin/{lang}/{page?}', 'AdminController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::get('/admin/{lang}/{page}/{param?}', 'AdminController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '[a-z]+'));


Route::get(
    '/admin',
    function () {
        return Redirect::to('/admin/pl/login.html');
    }
);

Route::group(
    array('before' => 'auth'),
    function () {
        \Route::get('admin/{lang}/elfinder', 'Barryvdh\ElfinderBundle\ElfinderController@showIndex');
        \Route::any('admin/{lang}/elfinder/connector', 'Barryvdh\ElfinderBundle\ElfinderController@showConnector');
    }
);
