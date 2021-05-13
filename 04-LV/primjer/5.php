<?php
header("Content-Type: text/plain");

/*****************************************
 *  1. Definiranje funkcije
 ****************************************/
function getSum($num1, $num2)
{
    $sum = $num1 + $num2;
    echo $sum;
}


getSum(10, 20);

/*****************************************
 *  U PHP-u funkcije također mogu imati opcionalni parametar
 ****************************************/
echo "\n \n \n";

function customFont($font, $size = 1.5)
{
    echo "<p style=\"font-family: {$font}; font-size: {$size}em;\">My name iz M____</p>";
}

echo customFont("Roboto");

/*****************************************
 *  Moguće je prosljediti referencu kao parametar
 ****************************************/
echo "\n \n \n";

function selfMultiply(&$number)
{
    $number *= $number;
    return $number;
}

$number = 5;
echo "{$number} \n";

selfMultiply($number);
echo $number;

/*****************************************
 *  Ključna riječ global definira globalnu varijablu koja se može koristiti unutar okoline funkcije
 ****************************************/
echo "\n \n \n";

$name = "Globalni Don lule";

function test()
{
    global $name;
    echo "{$name} \n";
}

test();

$name = "Novi Don lule";

test();
