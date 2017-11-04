<?php
 
$file = fopen('./data1.txt','r');


$n = 12;

$sum = 0;

for ($i=0; $i < $n; $i++) { 
    $string = fgets($file);
    $integer = (int)$string;
           if(is_numeric($integer)){
               $sum += $integer;
               
           }
}
echo "<h3>The sum of only numeric values is fuckin: $sum </h3>";

fclose($file);

