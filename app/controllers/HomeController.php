<?php

class HomeController extends BaseController
{

//    protected $layout = 'base';

    public function index($lang = 'pl', $pagelink = null)
    {

        App::setLocale($lang);

        if ($pagelink === null)
        {
            $pagelink = Menu::whereRaw('mainpage = ? AND lang = ?', array(true, $lang))->firstOrFail()->pagelink;
        }

        $menu = Menu::whereRaw('pagelink = ? AND lang = ?', array($pagelink, $lang))->firstOrFail();

        $asd = Menu::whereRaw('lang = ?', array($lang))->get();


        return View::make("templates.rss.layouts.{$menu->layout}")
            ->with('menu', $asd)
            ->with('content', 'TRESC')
            ->with('currentpage', $menu)
            ->with('content', $menu->content)
            ->with('templateDir', 'templates/rss')
            ->with('product', Product::all())
            ->with('langs', Langs::all())
            ->with('currentlang', $lang);
    }
}