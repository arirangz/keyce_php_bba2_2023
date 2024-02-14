<?php
require_once "Shape.php";

class Circle extends Shape
{
    public float $radius;

    public function __construct(float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        $area = pi() * pow($this->radius, 2);
        return round($area, 2);
    }
}
