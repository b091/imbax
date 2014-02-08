<?php

class ConfigurationController extends Controller
{

    /**
     * Aktualizuje opcje konfiguracji na podstaiwe tablicy POST
     * @param $lang
     * @return mixed
     */
    public function update($lang)
    {

        foreach($_POST as $key => $val)
        {
            Configuration::whereRaw(
                'name = ? AND lang_code = ?',
                array($key, $lang)
            )->firstOrFail()
            ->setvalue($val)
            ->save();
        }

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

}