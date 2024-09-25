<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mukul";


// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connection was successful<br>";
}

// Create a table in the DB
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(13) NOT NULL , `dest` VARCHAR(6) NOT NULL, PRIMARY KEY(`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if ($result) {
    echo "The table was created successfully!<br>";
} else {
    echo "The table was not created successfully because of this error---> " . mysqli_error($conn);
}




?>
