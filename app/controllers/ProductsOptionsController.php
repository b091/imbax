<?php

class ProductsOptionsController extends Controller
{

    public function add()
    {
         $option = new ProductsOptions();

         $option->title = Input::get('title');
         $option->color = Input::get('color');

         $option->save();

         return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {

        $option = ProductsOptions::find(Input::get('id'));

        $option->title = Input::get('title');
        $option->color = Input::get('color');

        $option->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }


    public function remove()
    {
        ProductsOptions::destroy(Input::get('id'));
        return $_SERVER['HTTP_REFERER'];
    }

}