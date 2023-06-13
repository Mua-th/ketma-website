<?php
include 'connection.php';


$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$pwd = $_POST['pwd'];

$query = "INSERT INTO user VALUES ('%s', '%s', '%s', '%s');";
$sql = sprintf($query, $em, $ln, $fn, $pwd);

if ($conn->query($sql) === TRUE) {
    header('Location: login.php');
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>

    

