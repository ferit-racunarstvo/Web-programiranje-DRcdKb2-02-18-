<?php
header("Content-Type: text/plain");

/*****************************************
 *  1. Jednodimenzionalni niz
 ****************************************/

$drinks = array("coffee", "tea", "water");
echo "{$drinks} \n - not working like we want \n\n";

$drinks[] = "hot cocoa";
print_r($drinks);

/*****************************************
 *  Metode za rad s nizovima
 ****************************************/
echo "\n \n \n";

/**
 * count
 * print_r
 * array_pop, array_push, array_shift, array_unshift
 * in_array, array_search, array_reverse sort, rsort, shuffle
 * array_fill, array_merge, array_intersect, array_diff, array_slice
 * array_sum, array_product, array_unique, array_filter, array_reduce
 */

array_push($drinks, "pina colata");
echo "{$drinks[0]}, count:" . count($drinks) . "\n";

echo array_pop($drinks) . "\n\n";

print_r(array_reverse($drinks));


/*****************************************
 *  2. Asocijantivni nizovi
 ****************************************/
echo "\n \n \n";

$ages = array("Mirko" => 22, "Slavko" => 32, "Maticarka" => 28);
print_r($ages);

$ages["Maticarka"] = 35;
print_r($ages);


/*****************************************
 *  3. Multidimenzionalni nizovi
 ****************************************/
echo "\n \n \n";

$contacts = array(
    array(
        "name" => "Mirko",
        "email" => "mirko@mail.com",
    ),
    array(
        "name" => "Slavko",
        "email" => "slavko@mail.com",
    ),
    array(
        "name" => "Maticarka",
        "email" => "maticarka@mail.com",
    )
);


var_dump($contacts);


