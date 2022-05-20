<?php

require_once 'HighWay.php';

final class MotorWay
{
    public function __construct(array $currentVehicles, int $nbLane = 4, int $maxSpeed = 130)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if (!($vehicle instanceof Bike) || !($vehicle instanceof Skateboard)){
            $currentVehicles[] = $vehicle;
        }
    }
}
