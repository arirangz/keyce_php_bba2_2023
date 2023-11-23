<?php

function calculateArea(float $length, float $width)
{
    return $length*$width;
}



echo "Bedroom: ". calculateArea(3.45,3)."<br>";
echo "Livingroom: ". calculateArea(4,5)."<br>";
echo "Kitchen: ". calculateArea(2,3);