<?php

class Car
{
    private string $brand;
    private float $maxSpeed;

    public function setMaxSpeed(float $maxSpeed):void
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        } else {
            $this->maxSpeed = 0;
        }
    }
    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function honk()
    {
        echo "bip bip";
    }

    public function displayBrand()
    {
        echo "Brand: ".$this->brand;
    }

    public function getMaxSpeedKm()
    {
        return $this->maxSpeed."km/h";
    }
}