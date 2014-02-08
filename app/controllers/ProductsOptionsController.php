<?php

class ProductsOptionsController extends Controller
{

    /**
     * Dodaje nowa opcje do bazy i przekierowuje na ostatni adres
     * @return mixed
     */
    public function add()
    {
         $option = new ProductsOptions();

         $option->setTiitle(Input::get('title'))
                ->setColor(Input::get('color'))
                ->save();

         return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Zwraca dane opcji o podanym id
     * @return mixed
     */
    public function get()
    {
        return ProductsOptions::find(Input::get('id'));
    }

    /**
     * Aktualizacja produktu
     * @return mixed
     */
    public function update()
    {
        $option = ProductsOptions::find(Input::get('id'));

        $option->setTitle(Input::get('title'))
               ->setColor(Input::get('color'))
               ->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Usuwamy opcje po podanym id z bazy danych
     * @return mixed
     */
    public function remove()
    {
        $id = Input::get('id');
        ProductsOptions::find($id)->product()->detach();
        ProductsOptions::destroy($id);
        return $_SERVER['HTTP_REFERER'];
    }

}