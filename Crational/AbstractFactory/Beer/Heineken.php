<?php

namespace Creational\AbstractFactory\Beer;

use Creational\AbstractFactory\BeerInterface;

class Heineken implements BeerInterface
{
    /** @var string */
    private $name;

    public function __construct()
    {
        $this->name = 'Heineken';
    }

    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}