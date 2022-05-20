<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    /*Crée dans la classe Car un attribut privé de type booléen, représentant l'état du frein à main, hasParkBrake.*/
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    /*Crée une méthode publique qui change l'état du frein à main setParkBrake().*/
    public function setParkBrake(): void
    {
        if (false === $this->hasParkBrake) {
            $this->hasParkBrake = true;
        }elseif(true === $this->hasParkBrake) {
            $this->hasParkBrake = false;
        }else{
            $this->hasParkBrake = true;
        }
    }

    /*Lève une exception dans Car au niveau de la méthode start(), avec throw(), si le frein à main est actif.*/
    public function start()
    {
        if (true === $this->hasParkBrake) {
            throw new Exception("Le frein à main est actif");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
