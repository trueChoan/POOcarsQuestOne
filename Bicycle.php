<?php
require_once 'lightableinterface.php';
require_once 'Vehicle.php';

use LightableInterface;


class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }
}
