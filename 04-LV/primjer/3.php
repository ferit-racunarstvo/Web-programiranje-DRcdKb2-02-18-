<?php

use JetBrains\PhpStorm\ArrayShape;

header("Content-type: text/plain");

/**********************************************
 * 1. Bool Tip podatka
 **********************************************/

$winter = FALSE;
echo "Winter: {$feels_like_summer} \n";

$do_i_like_php = TRUE;
echo "Php: {$do_i_like_php} \n";

$is_null = NULL;
echo "Is Null: {$is_null} \n";

$what_about_my_array = array(0);
echo "Empty array: {$is_null} \n";


$student_count = 24;
$is_there_any_students = (bool) $student_count;
echo "Any students: {$is_there_any_students} \n";
