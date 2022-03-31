<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $storageCapacity;
    private int $truckLoad = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, int $truckLoad)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->truckLoad = $truckLoad;
        $this->setEnergy($energy);
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function getTruckLoad(): string
    {
        if ($this->truckLoad < $this->storageCapacity) {
            return PHP_EOL . 'in filling with a load of ' . $this->truckLoad;
        } else {
            return PHP_EOL . 'full with a load of ' . $this->truckLoad;
        }
    }


    public function setTruckLoad(int $truckLoad)
    {
        if ($truckLoad > $this->storageCapacity) {
            echo PHP_EOL . 'Your truck load is over the storage capacity';
        } else {
            $this->truckLoad = $truckLoad;
        }
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
