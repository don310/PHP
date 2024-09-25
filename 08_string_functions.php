<?php
$name = "Deepak is a good boy";
echo $name;
echo "<br>";


echo "The length of " . "my string is " . strlen($name); // adding the two string so using the dot operator
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("Deepak", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo rtrim("    This is a good boy    ");
echo "<br>";
echo ltrim("    This is a good boy    ");
?>