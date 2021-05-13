<?php

header("Content-type: text/plain");

/**********************************************
 * 1. Metode za rad s znakovima
 **********************************************/

/**
 * strlen($str)
 * strpos($str, $ch)
 * substr($str, $start, $end)
 * strtolower($str), strtoupper($str)
 * trim($str)
 * explode($delim, $str), implode($delim, $arr)
 */

$name = "Don Lule";
echo $name . "\n";

$length = strlen($name);
echo $length . "\n";

$index_of_l = strpos($name, "L");
echo $index_of_l . "\n";

$last = substr($name, 0, 3);
echo $last . "\n";

$name = strtoupper($name);
echo $name . "\n";

/**********************************************
 * 2. Znakovni literali
 **********************************************/
echo "\n \n \n";

echo "Zovem se {$name} \n";

/**
 * Heredoc
 */

echo "\n \n \n";

$font_size = 12;
$line_height = 24;

$html_content = <<<TEXT
 <div class="container">
  <p style="font-size:{$font_size}px;line-height:{$line_height}px;">
    <span class="first-item" style="color:blue">My name is {$name}</span>
  </p>
 </div>
 TEXT;

echo $html_content;
