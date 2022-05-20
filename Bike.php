<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if (10 > $this->currentSpeed) {
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
