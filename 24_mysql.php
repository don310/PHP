<?php
echo "Welcome to the stage where we are ready to get connected to a database<br>";
/* Ways to connect to a MySQL database
1. MySQLi Extension
2. PDO - PHP DATA OBJECT
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";


// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connection was successful";
}
?>
