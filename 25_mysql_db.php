<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";


// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connection was successful<br>";
}

// Create a DB
$sql = "CREATE DATABASE mukul";
$result = mysqli_query($conn, $sql);
// echo "The result is ";
// var_dump($result); // Corrected function name

// Die if connection was not successful

// Check for the database creation success
if ($result) {
    echo "The db was created successfully!<br>";
} else {
    echo "The db was not created successfully because of this error---> " . mysqli_error($conn);
}


?>
