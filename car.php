<?php

require_once 'Vehicle.php';
require_once 'lightableinterface.php';

use LightableInterface;


class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;

    private int $energyLevel = 100;

    private bool $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */
    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     */

    public function setParkBrake(bool $ParkBrake)
    {
        $this->hasParkBrake = $ParkBrake;

        return $this;
    }

    public function start()
    {

        if ($this->getParkBrake()) {
            throw new Exception('Le frein a main est enclenché !');
        }

        if ($this->currentSpeed == 0 | $this->currentSpeed < 50) {
            $sentence = "" . PHP_EOL;
            while ($this->currentSpeed < 80) {
                $this->currentSpeed += 5;
                $this->energyLevel -= 5;

                $sentence .= "GETTING SPEED" . PHP_EOL;
            }
            $sentence .= "MAX SPEEEED" . PHP_EOL;
            return $sentence . 'energy left : ' . $this->getenergyLevel();
        }
        return "Already speeding";

        // return parent::start();

    }
}
