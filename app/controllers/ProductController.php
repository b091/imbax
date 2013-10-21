<?php

class ProductController extends Controller
{

    public function add($lang)
    {
        $product = new Product();


        $product->name = Input::get('name');
        $product->description = Input::get('description', '');
        $product->specjal = Input::get('specjal', false) == 'on';
        $product->menu_id = Input::get('menu_id');
        $options = Input::get('options');


        $product->save();

        $product->options()->sync($options);

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }


    public function get()
    {
        $product = Product::find(Input::get('id'));
        $product->options->toArray();
        return $product;
    }

    public function update()
    {
        $product = Product::find(Input::get('id'));

        $product->name = Input::get('name');
        $product->description = Input::get('description', '');
        $product->specjal = Input::get('specjal', false) == 'on';
        $product->menu_id = Input::get('menu_id');
        $options = Input::get('options');


        $product->save();

        $product->options()->sync($options);

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }


    public function remove()
    {
        $id = Input::get('id');
        Product::find($id)->options()->detach();
        Product::destroy($id);
    }

}