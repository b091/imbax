<?php

class LangController extends Controller
{



    public function update($lang)
    {

        Langs::whereRaw('1 =?',array(1))->update(array('disabled' => true, 'default' => false));
        Langs::whereIn('code', Input::get('langs'))->update(array('disabled' => false));
        Langs::where('code', Input::get('default'))->update(array('default' => true));

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }



}