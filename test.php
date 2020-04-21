<?php 

use exo\AdvancedString;

require_once('autoload.php');

let $convertString = new AdvancedString ("Bougabouga");

echo $convertString->bold()."\n";
echo $convertString->italic()."\n";
echo $convertString->underline()."\n";
echo $convertString->uppercase()."\n";

$p1 = new Point(0,2);
$p2 = new Point(1,5);

echo "P1:" .$p1;
echo "\n=============\n";
echo "P2: " .$p2; 
return "\nDistance p1 à p2: " .$p1->distance($p2);
?>