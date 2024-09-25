<?php
$name = "Deepak";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//String - sequence of characters
$name = "Deepak";
$friend = 'Rohan';

echo "$name friend is $friend";

//Integer - NOn decimal Number
$income = 455;
$debts = 555;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Float - Decimal point number
$income = 345.5;
$debts = -455.5;
echo $income;
echo "<br>";
echo $debts;


// Boolean - Can be eithe true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";


//Objects - Inatances of classes
// Employee is a class ----> Deepak can be one object


// Array - Used to store multiple values in a sinle variable
$friends = array("rohan", "shubham", "skillf", "larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
// echo $friends[4]; // will throw an error as the size of array is 4

// Null 
$name = NULL;
echo var_dump($name);

?>