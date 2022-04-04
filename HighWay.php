<?php
require_once 'Vehicle.php';

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane,   int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    public function getNbLane($nbLane): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }


    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}
