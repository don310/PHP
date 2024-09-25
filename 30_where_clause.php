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
else {
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `phptrip` WHERE dest='bihar'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch from the database
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>"; // Added missing semicolon here
$no = 1;
if ($num > 0) {
       while($row = mysqli_fetch_assoc($result)){
      // echo var_dump($row);
        echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";   
        $no = $no + 1;
    }
}

//Usage of WHERE Clause to Update Data
$sql = "UPDATE `phptrip` SET `name` = 'FromBihar' WHERE `dest` = 'bihar' ";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff<br>";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not updated the record successfully";
}

?>
