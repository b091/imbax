<?php
$langpartofurl = array('lang' => '[a-z]{2}');

//App::setLocale('pl');

Route::get('/{lang}/{page?}', 'HomeController@index')
    ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));

Route::get('/', 'HomeController@index');

// ADMIN PANEL

Route::post('/admin/{lang}/productsoptions/get.html', 'ProductsOptionsController@get')->where($langpartofurl);
Route::post('/admin/{lang}/product/get.html', 'ProductController@get')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/add.html', 'GalleryController@add')->where($langpartofurl);
//Route::post('/admin/{lang}/menu/add.html', 'MenuController@add')->where($langpartofurl);
//Route::controller('/admin/{lang}/menu', 'MenuController');


Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('menu', 'Api\MenuController');
});


Route::post('/admin/{lang}/productsoptions/add.html', 'ProductsOptionsController@add')->where($langpartofurl);
Route::post('/admin/{lang}/product/add.html', 'ProductController@add')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/remove.html', 'GalleryController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/menu/remove.html', 'MenuController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/productsoptions/remove.html', 'ProductsOptionsController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/product/remove.html', 'ProductController@remove')->where($langpartofurl);
Route::post('/admin/{lang}/product/removePhoto.html', 'ProductController@removePhoto')->where($langpartofurl);

Route::post('/admin/{lang}/gallery/update.html', 'GalleryController@update')->where($langpartofurl);
Route::post('/admin/{lang}/menu/update.html', 'MenuController@update')->where($langpartofurl);
Route::post('/admin/{lang}/productsoptions/update.html', 'ProductsOptionsController@update')->where($langpartofurl);
Route::post('/admin/{lang}/product/update.html', 'ProductController@update')->where($langpartofurl);

Route::post('/admin/{lang}/configuration/update.html', 'ConfigurationController@update')->where($langpartofurl);
Route::post('/admin/{lang}/lang/update.html', 'LangController@update')->where($langpartofurl);

Route::get('/admin/{lang}/{page?}', 'AdminController@index')->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));
Route::post('/admin/{lang}/{page?}', 'AdminController@index')->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));


Route::post(
    '/sendForm.html',
    function () {

        $validator = Validator::make(
            Input::all(),
            array(
                'subject' => 'required',
                'mailmessage' => 'required',
                'name' => 'required',
                'email' => 'required|email'
            )
        );

        if ($validator->fails())
        {
            return $validator->messages()->toJson();
        }

        mail(
            Configuration::whereRaw('name = ? AND lang_code = ?', array('mail', 'pl'))->firstOrFail()->value,
            'RSS - ' . Input::get('subject'),
            Input::get('mailmessage'),
            'From: website@realsteelsweden.com' . "\r\n" .
                'Reply-To: ' . Input::get('name')  . '<' . Input::get('email') . '>' . "\r\n" .
                'X-Mailer: PHP/' . phpversion()
        );

        return '';
    }
);

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

Route::get(
    '/admin/logout.html',
    function () {
        return Redirect::to('/admin/pl/logout.html');
    }
);


Route::get(
    '/test.html',
    function () {
       var_dump(
           get_magic_quotes_gpc());
    }
);


App::missing(function($exception)
{
//    return Response::view('templates.rss.layouts.missing', array(), 404);
        return Redirect::to('/');
});