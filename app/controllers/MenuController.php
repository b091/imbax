<?php

class MenuController extends Controller
{

    /**
     * Dodanie elementu menu i przekierowanie na ostatni link
     * @param $lang
     * @return mixed
     */
    public function add($lang)
    {
         (new Menu())->setLayout(Input::get('module'))
              ->setTitle(Input::get('title'))
              ->setContent(Input::get('content', ''))
              ->setPagelink(Input::get('pagelink'))
              ->setLang($lang)
              ->setMainpage(Input::get('mainpage', false))
              ->save();

         return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Aktualizajca elmentu menu i przekierowanie na ostatni link
     * @return mixed
     */
    public function update()
    {
        $menu = Menu::find(Input::get('id'));

        $menu->setTitle(Input::get('title'))
             ->setContent(Input::get('content', ''))
             ->setPagelink(Input::get('pagelink'))
             ->setMainpage(Input::get('mainpage', false))
             ->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Usuwa element menu
     * @return string
     */
    public function remove()
    {
//        $asd = Product::where('menu_id', '=', $id);
//        foreach ($asd as $product){
//            $product->options()->detach();
//            $product->delete();
//        }
        Menu::destroy(Input::get('id'));
        return '/admin';
    }

}