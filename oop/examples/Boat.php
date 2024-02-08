<?php

require "Vehicle.php";
class Boat extends Vehicle
{

    private int $cabins;


    public function __construct(int $cabins, float $maxSpeed, string $brand)
    {
        $this->setBrand($brand);
        $this->setMaxSpeed($maxSpeed);
        $this->setCabins($cabins);
    }


    /**
     * Get the value of cabins
     */
    public function getCabins(): int
    {
        return $this->cabins;
    }


    public function setCabins(int $cabins): self
    {
        $this->cabins = $cabins;

        return $this;
    }


}