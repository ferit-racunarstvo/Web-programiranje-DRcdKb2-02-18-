<?php

class Hotel
{
    public $primaryColor = 'black';
    public $secondaryColors = [
        'bathroom' => 'white',
        'bedroom' => 'light pink',
        'kitchen' => 'light blue'
    ];
}


$myHotel = new Hotel();

var_dump($myHotel);

echo "<br>  {$myHotel->primaryColor} <br>";

$myHotel->primaryColor = "Yellow";

echo "{$myHotel->primaryColor} <br> <br>";
