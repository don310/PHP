<?php
//Operators in PHP
/*
1. Arithmetic Operators
2. Assignment operators
3. Comparsion Operators
4. Logical Operators */

$a = 53;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";

// 2. Assignment operators
$x = $a;
echo "For x the value is ". $x . "<br>";
$a += 6;
echo "For x the value is ". $a . "<br>";
$a -= 6;
echo "For x the value is ". $a . "<br>";
$a *= 6;
echo "For x the value is ". $a . "<br>";
$a /= 6;
echo "For x the value is ". $a . "<br>";
$a %= 6; //$a = $a % 6
echo "For x the value is ". $a . "<br>";


//3. Comparsion Operators
$x = 7;
$y = 9;
 
echo "For x == y the result is ";
echo var_dump($x == $y);
echo "<br>";
echo "For x < y the result is ";
echo var_dump($x < $y);
echo "<br>";
echo "For x > y the result is ";
echo var_dump($x > $y);
echo "<br>";
echo "For x <= y the result is ";
echo var_dump($x <= $y);
echo "<br>";
echo "For x >= y the result is ";
echo var_dump($x >= $y);
echo "<br>";


// 4. Logical Operators
$m = true;
$n = false;
 
echo "For m and n the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m the result is ";
echo var_dump(!$m);
echo "<br>";

?>