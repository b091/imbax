<?php

class HomeController extends BaseController {

    protected $layout = 'base';

    public function index()
    {
        $menu = Menu::all();
        return View::make('menus', $menu);
    }
}