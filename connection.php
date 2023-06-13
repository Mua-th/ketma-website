<?php
$servername = "localhost";
$username = "root";
$password = "PFH#23kgrw9";
$db = "ketmadb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>