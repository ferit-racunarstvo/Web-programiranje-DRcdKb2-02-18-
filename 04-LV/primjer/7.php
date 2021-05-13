<?php
header("Content-Type: text/plain");

/*****************************************
 *  1. Sortiranje nizova - 1d
 ****************************************/
$colors = array("Red", "Green", "Blue", "Yellow");

sort($colors);
print_r($colors);

rsort($colors);
print_r($colors);

/*****************************************
 *  2. Sortiranje asocijativnih nizova po vrijednosti
 ****************************************/
echo "\n \n \n";

$ages = array("Mirko" => 22, "Slavko" => 32, "Maticarka" => 28);

asort($ages);
print_r($ages);

arsort($ages);
print_r($ages);

/*****************************************
 *  3. Sortiranje asocijativnih nizova po ključu
 ****************************************/
echo "\n \n \n";

ksort($ages);
print_r($ages);

krsort($ages);
print_r($ages);

/*****************************************
 *  4. Iteriranje nizova
 ****************************************/
echo "\n \n \n";

$names = array("Mirko", "Slavko", "Maticarka", "Masvidal");
foreach ($names as $name) {
    echo "{$name} \n";
}

echo "\n \n \n";

foreach ($ages as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value . "\n";
}
