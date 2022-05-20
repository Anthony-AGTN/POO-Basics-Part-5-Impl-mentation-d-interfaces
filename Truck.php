<?php

require_once('Vehicle.php');

class Truck extends Vehicle
{

    private int $storage;
    private int $storageLevel;


    public function __construct(int $storage, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
        $this->energy = $energy;
    }

    public function isFull(): string
    {
        if($this->storageLevel >= $this->storage){
            $sentence = "full";
        } else {
            $sentence = "in filling";
            }
            return $sentence;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    { 
            $this->storage = $storage; 
    }

    public function getStorageLevel(): int
    {
        return $this->storageLevel;
    }

    public function setStorageLevel(int $storageLevel): void
    {
        $this->storageLevel = $storageLevel;
    }
}
