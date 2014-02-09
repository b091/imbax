<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Gallery extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gallery';

    /**
     * Nazwa/opis grafiki
     * @var string
     */
    private $name;

    /**
     * Nazwa pliku
     * @var string
     */
    private $photo;

    /**
     * Element menu w ktorym istnieje galeria
     * @var integer
     */
    private $menu_id;

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
     * Ustawia nazwe pliku i przenosi go z tmp do odpowiedniego katalogu
     * @param string $photo
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @return $this
     */
    public function setPhoto($photo, UploadedFile $file)
    {
        $this->photo = $photo;
        $file->move('files' . DIRECTORY_SEPARATOR . 'gallery', $this->photo);
        return $this;
    }


}