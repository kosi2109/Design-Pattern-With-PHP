<?php
require "./vendor/autoload.php";
use Creational\AbstractFactory\Bar;

$first = new Bar\FirstCheapBar();
$second = new Bar\SecondCheapBar();

$first->createBeer()->getName();
print($first->createBeer()->getName());
$second->createBeer()->getName();
print($second->createBeer()->getName());