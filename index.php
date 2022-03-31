<?php
require_once 'car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$margeWagon = new Car('Orange', 5, 'Gazoil');

echo $margeWagon->start();

echo $margeWagon->getCurrentSpeed() . PHP_EOL;
echo $margeWagon->start();
echo $margeWagon->brake();


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();

$car = new Car('green', 4, 'electric');
echo $car->forward();

$truck = new Truck('Pink', 4, 'fuel', 500, 300);

echo $truck->getTruckLoad();

$truck->setTruckLoad(450);

echo $truck->getTruckLoad();

echo $truck->start();
echo $truck->brake();
