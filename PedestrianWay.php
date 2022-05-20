<?php

require_once 'HighWay.php';

final class PedestrianWay
{
    public function __construct(array $currentVehicles, int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle($vehicle)
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)){
            $currentVehicles[] = $vehicle;
        }
    }
}
