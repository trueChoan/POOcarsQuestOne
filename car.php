<?php
class Car
{
    private int $nbWheels;
    private int $currentSpeed = 0;
    private int $energyLevel;

    public function __construct(private string $color, private int $nbSeats, private string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }


    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }


    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }


    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }


    public function getEnergy()
    {
        return $this->energy;
    }


    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function forward()
    {
        $this->currentSpeed = 55;

        return "BOBOP !";
    }
    public function brake()
    {
        $sentence = "" . PHP_EOL;
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start()
    {
        if ($this->currentSpeed == 0) {
            $sentence = "" . PHP_EOL;
            while ($this->currentSpeed < 50) {
                $this->currentSpeed += 5;
                $sentence .= "GETTING SPEED" . PHP_EOL;
            }
            $sentence .= "MAX SPEEEED" . PHP_EOL;
            return $sentence;
        }
        return "Already speeding";
    }
}
