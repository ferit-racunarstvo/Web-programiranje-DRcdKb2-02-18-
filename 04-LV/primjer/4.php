<?php
header("Content-Type: text/plain");

/*****************************************
 *  1. Terarni operator u PHP-u
 ****************************************/

if ($age < 18) {
    echo 'Child';
} else {
    echo 'Adult';
}

/**
 * Ili može to bolje kao..
 */

echo ($age < 18) ? 'Child' : 'Adult';

/*****************************************
 *  2. Uvjetni Null operator (??) - PHP +7..
 ****************************************/
echo "\n \n \n";

$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';

/**
 * Ili jednostavnije
 */

$name = $_GET['name'] ?? 'anonymus';
echo $name;

/*****************************************
 *  3. Iteracija u PHP-u
 ****************************************/
echo "\n \n \n";

echo "For petlja \n";
for ($i = 0; $i < 10; $i++) {
    print "{$i} \n";
}

echo "While \n";
$i = 1;
while ($i <= 3) {
    $i++;
    print "{$i} \n";
}

echo "Do while \n";
$i = 1;
do {
    $i++;
    print "{$i} \n";
} while ($i <= 3);
