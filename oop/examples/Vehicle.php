<?php

abstract class Vehicle
{
    protected string $brand;
    protected float $maxSpeed;
    protected float $weight;

    public abstract function honk();

    public function displayInfo()
    {
        echo "<h2>Brand:".$this->getBrand()."</h2>";
        echo "<p>Max speed:".$this->getMaxSpeed()."</p>";
    }
    
    public function getMaxSpeed(): float
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(float $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }


    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}