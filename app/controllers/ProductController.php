<?php

class ProductController extends Controller
{

    /**
     * Usuwa zdjecie produktu
     * @param $lang
     */
    public function removePhoto($lang)
    {
        $product = Product::find(Input::get('id'));
        $this->unlinkPhoto($product->getPhoto());
        $product->setPhoto('')
                ->save();
    }

    /**
     * Dodaje nowy produkt do bazy danych, i przekierowuje na ostanti adres
     * @param $lang
     * @return mixed
     */
    public function add($lang)
    {
        $this->doChange(new Product());
        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Zwraca dane produktu o podanym id
     * @return mixed
     */
    public function get()
    {
        $product = Product::find(Input::get('id'));
        $product->options->toArray();
        return $product;
    }

    /**
     * Aktualizuje dane o produkcieo podanm id
     * @return mixed
     */
    public function update()
    {
        $this->doChange(Product::find(Input::get('id')));

        return Redirect::to($_SERVER['HTTP_REFERER']);
    }

    /**
     * Usuwa produkt wraz ze zdjeciami
     */
    public function remove()
    {
        $id = Input::get('id');
        $product = Product::find($id);
        $this->unlinkPhoto($product->getPhoto());
        $product->options()->detach();
        Product::destroy($id);
    }


    // Helper methods, where we will put them hmm?

    /**
     * @param Product $product
     */
    private function doChange(Product $product)
    {
        $product->setName(Input::get('name'))
                ->setDescription(Input::get('description', ''))
                ->setShortDescription(Input::get('short_description', ''))
                ->setSpecjal(Input::get('specjal', false) == 'on')
                ->setDisabled(Input::get('disabled', false) == 'on')
                ->setMenuId(Input::get('menu_id'));

        $options = Input::get('options');
        $file = Input::file('photo');

        if (!empty($file))
        {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $this->unlinkPhoto($product->getPhoto());
            $product->setPhoto($filename);
            $file->move('files' . DIRECTORY_SEPARATOR . 'products', $filename);
        }

        $product->save();

        if (!empty($options))
        {
            $product->options()->sync($options);
        }
    }

    /**
     * Usuwa plik graficzny z dyku
     * @param string $fileName
     */
    private function unlinkPhoto($fileName)
    {
        if(!empty($fileName))
        {
            unlink('files' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $fileName);
        }
    }

}