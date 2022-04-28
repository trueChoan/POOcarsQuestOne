<?php
require_once 'car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Motorway.php';
require_once 'HighWay.php';
require_once 'PedestrianWay.php';

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


$A55 = new MotorWay();

$A55->addVehicle($truck);
$truckPeugeot = new Truck('Bleu', 8, 'fuel', 800, 300);
$A55->addVehicle($truckPeugeot);
$truckPeugeot->setNbWheels(12) . PHP_EOL;

$A55->addVehicle($bicycle);
// var_dump($A55);
PHP_EOL;
$promenade = new PedestrianWay();
$promenade->addVehicle($margeWagon);
// var_dump($promenade);

// exception quetes poo4 

$car->setParkBrake(true);
$car->setEnergyLevel(100);

try {
    echo $car->start();
} catch (Exception $e) {
    echo 'Exception reçue : ', $e->getMessage(), "\n";
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut DOH" . "\n";
}

echo $car->start();

echo $bicycle->start();
echo $bicycle->switchOn();
