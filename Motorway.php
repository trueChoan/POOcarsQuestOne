<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{


    public function __construct(int $nbLane = 4, int $maxSpeed =  130)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof ('Truck') || $vehicle instanceof ('Car')) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo "YOU WANT TO DIE BRAH ?";
        }
    }
}
