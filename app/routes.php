<?php
$langpartofurl = array('lang' => '[a-z]{2}');

Route::get('/{lang}/{page?}', 'HomeController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::get('/', 'HomeController@index');

// ADMIN PANEL

Route::post('/admin/{lang}/productsoptions/get.html', 'ProductsOptionsController@get')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/add.html', 'GalleryController@add')->where($langpartofurl);
Route::post('/admin/{lang}/menu/add.html', 'MenuController@add')->where($langpartofurl);
Route::post('/admin/{lang}/productsoptions/add.html', 'ProductsOptionsController@add')->where($langpartofurl);
Route::post('/admin/{lang}/product/add.html', 'ProductController@add')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/remove.html', 'GalleryController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/menu/remove.html', 'MenuController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/productsoptions/remove.html', 'ProductsOptionsController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/product/remove.html', 'ProductController@remove')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/update.html', 'GalleryController@update')->where($langpartofurl);
Route::post('/admin/{lang}/menu/update.html', 'MenuController@update')->where($langpartofurl);
Route::post('/admin/{lang}/productsoptions/update.html', 'ProductsOptionsController@update')->where($langpartofurl);
Route::post('/admin/{lang}/product/update.html', 'ProductController@update')->where($langpartofurl);

Route::get('/admin/{lang}/{page?}', 'AdminController@index')->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));
Route::post('/admin/{lang}/{page?}', 'AdminController@index')->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::group(
    array('before' => 'auth'),
    function () {
        \Route::get('admin/{lang?}/elfinder', 'Barryvdh\ElfinderBundle\ElfinderController@showIndex')->where(array('lang' => '[a-z]{0,2}'));
        \Route::any('admin/{lang?}/elfinder/connector', 'Barryvdh\ElfinderBundle\ElfinderController@showConnector')->where(array('lang' => '[a-z]{0,2}'));
        \Route::get('admin/{lang?}/elfinder/tinymce', 'Barryvdh\ElfinderBundle\ElfinderController@showTinyMCE4')->where(array('lang' => '[a-z]{0,2}'));
    }
);

Route::get('/admin/{lang}/{page}/{param?}', 'AdminController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '[a-z]+'));


Route::get(
    '/admin',
    function () {
        return Redirect::to('/admin/pl/login.html');
    }
);

