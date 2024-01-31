<?php

class Car
{
    public string $brand;
    public float $maxSpeed;

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