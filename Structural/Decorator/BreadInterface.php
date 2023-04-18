<?php

namespace Structural\Decorator;

interface BreadInterface
{
    /**
     * Retrieve the description for a given Bread
     * @return string
     */
    public function getDescription();

    /**
     * Retrieve the price for a given Bread
     * @return float
     */
    public function getPrice();
}