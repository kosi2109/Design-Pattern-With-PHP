<?php

use Singleton\Logger;

Logger::getInstance();
print(Logger::addOne());

require "./home.php";
