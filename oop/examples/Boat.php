<?php

require_once "Vehicle.php";
class Boat extends Vehicle
{

    private int $cabins;


    public function __construct(int $cabins, float $maxSpeed, string $brand)
    {
        $this->setBrand($brand);
        $this->setMaxSpeed($maxSpeed);
        $this->setCabins($cabins);
    }

    public function displayInfo()
    {
        echo "<h2>Brand:".$this->getBrand()."</h2>";
        echo "<p>Max speed:".$this->getMaxSpeed()."</p>";
        echo "<p>Number of cabins:".$this->getCabins()."</p>";
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

    public function honk()
    {
        echo "bong";
    }


}