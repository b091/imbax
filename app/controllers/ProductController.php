<?php

class ProductController extends Controller
{

    private function doChange(Product $product)
    {
        $product->name = Input::get('name');
        $product->description = Input::get('description', '');
        $product->specjal = Input::get('specjal', false) == 'on';
        $product->disabled = Input::get('disabled', false) == 'on';
        $product->menu_id = Input::get('menu_id');
        $options = Input::get('options');

        $file = Input::file('photo');
        if(!empty($file)){
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $product->photo = $filename;
            $file->move('files' . DIRECTORY_SEPARATOR . 'products', $filename);
        }

        $product->save();

        if(!empty($options))
        {
            $product->options()->sync($options);
        }
    }

    public function add($lang)
    {
        $this->doChange(new Product());
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
        $this->doChange(Product::find(Input::get('id')));

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }


    public function remove()
    {
        $id = Input::get('id');
        Product::find($id)->options()->detach();
        Product::destroy($id);
    }

}