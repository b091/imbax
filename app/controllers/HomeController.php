<?php

class HomeController extends BaseController
{

//    protected $layout = 'base';

    public function index($lang = 'pl', $pagelink = null)
    {

        App::setLocale($lang);

        if ($pagelink === null) {
            $pagelink = Menu::whereRaw('mainpage = ? AND lang = ?', array(true, $lang))->firstOrFail()->pagelink;
        }

        $currentpage = Menu::whereRaw('pagelink = ? AND lang = ?', array($pagelink, $lang))->firstOrFail();

        $menu = Menu::whereRaw('lang = ?', array($lang))->get();

        return View::make("templates.rss.layouts.{$currentpage->layout}")
            ->with('menu', $menu)
            ->with('content', 'TRESC')
            ->with('currentpage', $currentpage)
            ->with('content', $currentpage->content)
            ->with('templateDir', 'templates/rss')
            ->with('product', Product::where('menu_id', '=', $currentpage->id)->get())
            ->with('langs', Langs::all())
            ->with('gallery', Gallery::where('menu_id', '=', $currentpage->id)->get())
            ->with('currentlang', $lang);
    }
}