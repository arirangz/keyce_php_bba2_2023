<?php

class Rectangle
{
    public float $length;
    public float $width;
    public string $color;

    public function __construct(float $length, float $width, string $color)
    {
        $this->length = $length;
        $this->width = $width;
        $this->color = $color;
    }

    /* with :float we say that this function must return a float*/
    public function calculateArea():float
    {
        return $this->length * $this->width;
    }
}