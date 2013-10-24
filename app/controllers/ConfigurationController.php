<?php

class ConfigurationController extends Controller
{



    public function update($lang)
    {

        foreach($_POST as $key => $val)
        {
            $config = Configuration::whereRaw('name = ? AND lang_code = ?', array($key, $lang))->firstOrFail();
            $config->value = $val;
            $config->save();
        }

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }



}