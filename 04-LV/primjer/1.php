<?php

header("Content-type: text/plain");

/**********************************************
 * 1. Tipovi podataka
 **********************************************/

$user_name = "Medo";
$age = 25;
$age_in_dog_years = $age / 7;
$is_true = true;

echo $user_name . "  Tip podatka: - " . gettype($user_name) . "\n";
echo $age . "  Tip podatka: - " . gettype($age) . "\n";
echo $age_in_dog_years . "  Tip podatka: - " . gettype($age_in_dog_years) . "\n";
echo $is_true . "  Tip podatka: - " . gettype($is_true) . "\n";

/**********************************************
 * PHP radi implicitnu konverziju tipova podataka
 **********************************************/
echo "\n \n \n";

echo "Implicitna konverzija tipova podataka: \n";
echo gettype(1 + "1") . "\n";
echo gettype(3 / 2) . "\n";

/**********************************************
 * PHP eksplicitna konverzija tipova podataka
 **********************************************/
echo "\n \n \n";

$age = (int) "21";
echo $age . "- Tip podatka: " . gettype($age) . "\n";
