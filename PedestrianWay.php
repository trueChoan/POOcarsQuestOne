<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{


    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof ('Bicycle') || $vehicle instanceof ('Sakteboard')) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo "VOUS ALLEZ TUER QUELQU'UN" . PHP_EOL;
        }
    }
}
