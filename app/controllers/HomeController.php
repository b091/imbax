<?php

class HomeController extends BaseController
{

//    protected $layout = 'base';

    public function index($lang = null, $pagelink = null)
    {
        if(empty($lang))
        {
            $lang =  Langs::where('default', '=', true)->firstOrFail()->code;
        }

        App::setLocale($lang);

        if ($pagelink === null) {
            $pagelink = Menu::whereRaw('layout = ? AND lang = ?', array('home', $lang))->firstOrFail()->pagelink;
        }

        $currentpage = Menu::whereRaw('pagelink = ? AND lang = ?', array($pagelink, $lang))->firstOrFail();
        $productsPage = Menu::whereRaw('layout = ? AND lang = ?', array('products', $lang))->firstOrFail();
        $homepageProducts = array();

        if(!empty($productsPage->id))
        {
            $homepageProducts = Product::whereRaw('specjal = ? AND menu_id = ? and disabled = ?', array(true, $productsPage->id, false))->get();
        }

        $menu = Menu::whereRaw('lang = ?', array($lang))->get();

        return View::make("templates.rss.layouts.{$currentpage->layout}")
            ->with('menu', $menu)
            ->with('content', 'TRESC')
            ->with('currentpage', $currentpage)
            ->with('content', $currentpage->content)
            ->with('templateDir', 'templates/rss')
            ->with('product', Product::whereRaw('menu_id = ? AND disabled = ?', array($currentpage->id, false))->get())
            ->with('homepageproduct', $homepageProducts) //@todo i po langu np
            ->with('productspagelink', $productsPage->pagelink)
            ->with('langs', Langs::where('disabled', '=', false)->get())
            ->with('gallery', Gallery::where('menu_id', '=', $currentpage->id)->get())
            ->with('pageTitle', Configuration::whereRaw('lang_code = ? AND name = ?', array($lang, 'title'))->firstOrFail()->value)
            ->with('pageDescription', Configuration::whereRaw('lang_code = ? AND name = ?', array($lang, 'description'))->firstOrFail()->value)
            ->with('pageKeywords', Configuration::whereRaw('lang_code = ? AND name = ?', array($lang, 'keywords'))->firstOrFail()->value)
            ->with('pagePhone', Configuration::whereRaw('lang_code = ? AND name = ?', array($lang, 'phone'))->firstOrFail()->value)
            ->with('currentlang', $lang);
    }
}