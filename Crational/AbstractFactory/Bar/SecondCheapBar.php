<?php

namespace Creational\AbstractFactory\Bar;

use Creational\AbstractFactory;
use Creational\AbstractFactory\Beer;
use Creational\AbstractFactory\Cocktail;

class SecondCheapBar extends AbstractFactory\AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return AbstractFactory\BeerInterface
     */
    public function createBeer()
    {
        return new Beer\Heineken();
    }

    /**
     * Creates a nice Cocktail
     * @return AbstractFactory\CocktailInterface
     */
    public function createCocktail()
    {
        return new Cocktail\Mojito();
    }
}