<?php

require_once "Vehicle.php";

class Car extends Vehicle
{

    private int $numberOfWheels;

    public function __construct(int $numberOfWheels, float $maxSpeed, string $brand)
    {
        $this->setBrand($brand);
        $this->setMaxSpeed($maxSpeed);
        $this->setNumberOfWheels($numberOfWheels);
    }


    public function honk()
    {
        echo "bip bip";
    }


    public function getNumberOfWheels(): int
    {
        return $this->numberOfWheels;
    }

    public function setNumberOfWheels(int $numberOfWheels): self
    {
        $this->numberOfWheels = $numberOfWheels;

        return $this;
    }
}