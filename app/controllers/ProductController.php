<?php

class ProductController extends Controller
{

    public function add($lang)
    {
        $product = new Product();


        $product->name = Input::get('title');
        $product->description = Input::get('content', '');
        $product->specjal = Input::get('specjal', false) == 'on';
        $product->menu_id = Input::get('menu_id');
        $options = Input::get('options');


        $product->save();

        $product->options()->sync($options);

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {

    }


    public function remove()
    {
        Product::destroy(Input::get('id'));
    }

}