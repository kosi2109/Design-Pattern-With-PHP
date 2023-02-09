<?php

namespace Creational\AbstractFactory;

interface BeerInterface
{
    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName();
}