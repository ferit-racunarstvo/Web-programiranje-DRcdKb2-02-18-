<?php

class Hotel
{
    private $primaryColor;

    public function __construct($color)
    {
        $this->primaryColor = $color;
    }

    public function getColor()
    {
        return $this->primaryColor;
    }

    public function setColor($color)
    {
        $this->primaryColor = $color;
    }
}


$myHotel = new Hotel("blue");

var_dump($myHotel);

echo "<br>  {$myHotel->getColor()} <br>";
