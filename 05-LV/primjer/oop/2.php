<?php

class Hotel
{
    public $primaryColor = 'black';

    public function getColor()
    {
        return $this->primaryColor;
    }

    public function setColor($color)
    {
        $this->primaryColor = $color;
    }
}


$myHotel = new Hotel();

var_dump($myHotel);

echo "<br> {$myHotel->primaryColor}  <br>";

echo "<br>  {$myHotel->getColor()} <br>";

$myHotel->setColor("yellow");

echo "<br>  {$myHotel->getColor()} <br>";