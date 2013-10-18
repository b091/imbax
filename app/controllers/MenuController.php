<?php

class MenuController extends Controller
{

    public function add($lang)
    {
         $menu = new Menu();

         $menu->layout = Input::get('module');
        
         $menu->title = Input::get('title');
         $menu->content = Input::get('content', '');
         $menu->pagelink = Input::get('pagelink');
         $menu->lang = $lang;
         $menu->mainpage = Input::get('mainpage', false);

         $menu->save();

         return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {

        $menu = Menu::find(Input::get('id'));

        $menu->title = Input::get('title');
        $menu->content = Input::get('content', '');
        $menu->pagelink = Input::get('pagelink');
        $menu->mainpage = Input::get('mainpage', false);

        $menu->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }


    public function remove()
    {
        Menu::destroy(Input::get('id'));
        return '/admin';
    }

}