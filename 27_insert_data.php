<?php
// INSERT INTO `notes` (`sno`, `title`, `description`, `timestamp`) VALUES (NULL, 'buy books', 'Please buy books from store', current_timestamp());
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

// Variables to be inserted into the table
$name = "Vikrant";
$destination = "Haldwani";

//SQL query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the trip table in the database
if ($result) {
    echo "The record has been inserted successfully!<br>";
} else {
    echo "The record was not inserted successfully because of this error---> " . mysqli_error($conn);
}

?>