<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * Nazwa
     * @var string
     */
    private $name;

    /**
     * Opis
     * @var string
     */
    private $description;

    /**
     * Skrocony opis
     * @var string
     */
    private $short_description;

    /**
     * Czy jest to produkt promowany
     * @var boolean
     */
    private $specjal;

    /**
     * Czy jest to produkt dostepny
     * @var boolean
     */
    private $disabled;

    /**
     * Id kategorii do ktorego produkt nalezy
     * @var integer
     */
    private $menu_id;

    /**
     * Nazwa pliku ze zdjeciem
     * @var string
     */
    private $photo;


    public function options()
    {
        return $this->belongsToMany('ProductsOptions', 'product_options');
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param boolean $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @param int $menu_id
     * @return $this
     */
    public function setMenuId($menu_id)
    {
        $this->menu_id = $menu_id;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $short_description
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;
        return $this;
    }

    /**
     * @param boolean $specjal
     * @return $this
     */
    public function setSpecjal($specjal)
    {
        $this->specjal = $specjal;
        return $this;
    }

    /**
     * @param string $photo
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }


}