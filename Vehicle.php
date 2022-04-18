<?php



abstract class  Vehicle
{




    protected int $currentSpeed = 0;
    protected int $nbWheels;


    public function __construct(protected string $color, protected int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }



    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }



    public function forward()
    {
        $this->currentSpeed = 25;

        return "BOBOP !";
    }
    public function brake()
    {
        $sentence = "" . PHP_EOL;
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= PHP_EOL . "I'm stopped !" . PHP_EOL;
        return $sentence;
    }
    public function start()
    {

        if ($this->currentSpeed == 0 | $this->currentSpeed < 50) {
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
