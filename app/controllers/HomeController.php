<?php

class HomeController extends BaseController {

    protected $layout = 'base';

    public function index()
    {
//        // BCrypt. Do I have this in PHP?
//        $password = Hash::make('password');
//
//        $data = array(
//            'heading' => 'Hello Laravel (from Home)',
//            'body' => 'This is awesome, from the HomeController',
//            'password' => $password
//        );
//
//        $this->layout->content = View::make('test', $data);
        $menu = Menu::all();
        return View::make('menus', $menu);
    }
}