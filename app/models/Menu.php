<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Menu extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';

    /**
     * Nazwa rodzaju szablonu jaki ma byc wyswietlony
     * @var string
     */
    private $layout;

    /**
     * tytul/nazwa
     * @var string
     */
    private $title;

    /**
     * Zawwartosc podstrony text/html
     * @var string
     */
    private $content;

    /**
     * Ling skrocony do strony
     * @var string
     */
    private $pagelink;

    /**
     * Jezyk strony
     * @var string
     */
    private $lang;

    /**
     * Czywyswietla sie jako glowna
     * @var boolean
     */
    private $mainpage;


    public function products()
    {
        return $this->hasMany('Product');
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @param string $layout
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @param boolean $mainpage
     * @return $this
     */
    public function setMainpage($mainpage)
    {
        $this->mainpage = $mainpage;
        return $this;
    }

    /**
     * @param string $pagelink
     * @return $this
     */
    public function setPagelink($pagelink)
    {
        $this->pagelink = $pagelink;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


}