<?php
class Product
{
    public string $name;
    public float $price;
    public float $vat;

    public function __construct(string $name, float $price, float $vat)
    {
        $this->name = $name;
        $this->price = $price;
        $this->vat = $vat;
    }

    public function getPriceWithVat()
    {
        return $this->price + ($this->price * $this->vat)/100;
    }

}