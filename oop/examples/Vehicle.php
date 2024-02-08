<?php

class Vehicle
{
    protected string $brand;
    protected float $maxSpeed;
    protected float $weight;

    
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