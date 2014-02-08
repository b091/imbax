<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProductsOptions extends Eloquent
{

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'products_options';

    /**
     * Nazwa opcji
     * @var string
     */
    private $title;

    /**
     * Kolor opcji
     * @var string
     */
    private $color;

    /**
     * Polaczenie z tabela z produktami
     * @return mixed
     */
    public function product()
    {
        return $this->belongsToMany('Product', 'product_options');
    }

    /**
     * Ustawia tytul
     * @param string $title
     * @return $this
     */
    public function setTiitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Ustawia kolor
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

}