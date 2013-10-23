<?php

class HomeController extends BaseController
{

//    protected $layout = 'base';

    public function index($lang = 'pl', $pagelink = null)
    {

        App::setLocale($lang);

        if ($pagelink === null) {
            //$pagelink = Menu::whereRaw('mainpage = ? AND lang = ?', array(true, $lang))->firstOrFail()->pagelink;
            $pagelink = Menu::whereRaw('layout = ? AND lang = ?', array('home', $lang))->firstOrFail()->pagelink;
        }

        $currentpage = Menu::whereRaw('pagelink = ? AND lang = ?', array($pagelink, $lang))->firstOrFail();
        $productsPage = Menu::whereRaw('layout = ? AND lang = ?', array('products', $lang))->firstOrFail();
        $homepageProducts = array();

        if(!empty($productsPage->id))
        {
            $homepageProducts = Product::whereRaw('specjal = ? AND menu_id = ?', array(true, $productsPage->id))->get();
        }

        $menu = Menu::whereRaw('lang = ?', array($lang))->get();

        return View::make("templates.rss.layouts.{$currentpage->layout}")
            ->with('menu', $menu)
            ->with('content', 'TRESC')
            ->with('currentpage', $currentpage)
            ->with('content', $currentpage->content)
            ->with('templateDir', 'templates/rss')
            ->with('product', Product::where('menu_id', '=', $currentpage->id)->get())
            ->with('homepageproduct', $homepageProducts) //@todo i po langu np
            ->with('productspagelink', $productsPage->pagelink)
            ->with('langs', Langs::all())
            ->with('gallery', Gallery::where('menu_id', '=', $currentpage->id)->get())
            ->with('pageTitle', Configuration::whereRaw('lang_code = ? AND name = ?', array('pl', 'title'))->firstOrFail()->value)
            ->with('pageDescription', Configuration::whereRaw('lang_code = ? AND name = ?', array('pl', 'description'))->firstOrFail()->value)
            ->with('pagePhone', Configuration::whereRaw('lang_code = ? AND name = ?', array('pl', 'phone'))->firstOrFail()->value)
            ->with('currentlang', $lang);
    }
}