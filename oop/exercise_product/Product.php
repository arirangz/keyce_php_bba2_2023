<?php
class Product
{
    private string $name;
    private float $price;
    private float $vat;

    public function __construct(string $name, float $price, float $vat)
    {

        $this->setName($name);
        $this->setPrice($price);
        $this->setVat($vat);

    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setPrice(float $price):void
    {
        if ($price >= 0) {
            $this->price = $price;
        } else {
            $this->price = 0;
        }
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function getVat():float
    {
        return $this->vat;
    }

    public function setVat(float $vat):void
    {
        $this->vat = $vat;
    }

    public function getPriceWithVat()
    {
        return $this->price + ($this->price * $this->vat)/100;
    }

}