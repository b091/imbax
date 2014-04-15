<?php

//App::setLocale('pl');
Route::group(
    array(),
    function () {
        Route::get('/{lang}/{page?}', 'HomeController@index')
            ->where(array('lang' => '[a-z]{2}', 'page' => '(.*\.html)'));
        Route::get('/', 'HomeController@index');
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

                if ($validator->fails()) {
                    return $validator->messages()->toJson();
                }

                mail(
                    Configuration::whereRaw('name = ? AND lang_code = ?', array('mail', 'pl'))->firstOrFail()->value,
                    Input::get('subject'),
                    Input::get('mailmessage'),
                    'From: ' . PHP_EOL .
                    'Reply-To: ' . Input::get('name') . '<' . Input::get('email') . '>' . PHP_EOL .
                    'X-Mailer: PHP/' . phpversion()
                );

                return '';
            }
        );
    }
);

Route::group(
    array(
        'prefix' => 'api/v1',
        'before' => 'auth.basic'
    ),
    function () {
        Route::resource('menu', 'Api\MenuController');
    }
);

Route::group(
    array(
        'before' => 'auth'
    ),
    function () {
        \Route::get('admin/{lang?}/elfinder', 'Barryvdh\ElfinderBundle\ElfinderController@showIndex')->where(array('lang' => '[a-z]{0,2}'));
        \Route::any('admin/{lang?}/elfinder/connector', 'Barryvdh\ElfinderBundle\ElfinderController@showConnector')->where(array('lang' => '[a-z]{0,2}'));
        \Route::get('admin/{lang?}/elfinder/tinymce', 'Barryvdh\ElfinderBundle\ElfinderController@showTinyMCE4')->where(array('lang' => '[a-z]{0,2}'));
    }
);

Route::get('/admin', 'AdminController@index');
Route::post('/admin/login', 'AdminController@login');
