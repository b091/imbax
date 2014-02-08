<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Configuration extends Eloquent
{

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'configuration';

    /**
     * Wartosc opcji
     * @var string
     */
    private $value;

    /**
     * Ustawia wartosc opcji konfiguracji
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}