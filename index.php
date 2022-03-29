<?php
require_once 'car.php';

$margeWagon = new Car('Orange', 5, 'Gazoil');

echo $margeWagon->start();

echo $margeWagon->getCurrentSpeed() . PHP_EOL;
echo $margeWagon->start();
echo $margeWagon->brake();
