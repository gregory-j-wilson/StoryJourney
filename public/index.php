<?php

$servername = "localhost";
$username = "gjwilson7390";
$password = "Greg61419!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>