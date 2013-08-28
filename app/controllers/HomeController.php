<?php

class HomeController extends BaseController
{

//    protected $layout = 'base';

    public function index($page = null)
    {
        $template =  'content';

        if($page === null or $page === 'onas.html')
        {
            $template = 'home';
            $page = 'onas.html';
        }

        $content = Menu::where('pagelink', '=', $page)->firstOrFail()->content;

        return View::make("templates.rss.{$template}")
            ->with('menu', Menu::all())
            ->with('content', 'TRESC')
            ->with('currentpage', $page)
            ->with('content', $content)
            ->with('templateDir', 'templates/rss')
            ->with('product', Product::all());
    }
}