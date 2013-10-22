<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProductsOptions extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products_options';

    public function product()
    {
        return $this->belongsToMany('Product', 'product_options');
    }
}