<?php

class Product
{
    public string $name;
    public float $price;
    public float $vat;

    public function getPriceWithVat()
    {
        return $this->price + ($this->price * $this->vat)/100;
    }
}