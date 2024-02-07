<?php

class Ticket
{

    public int $quantity;
    public float $unit_price;

    public function getTotal()
    {
        return $this->quantity * $this->unit_price;
    }

}