<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
  die("Connection Unsuccessful: ".$conn->connect_error); 
}
$sql = "CREATE DATABASE Masters Students";
if ($conn->query($sql) == TRUE) {
echo "Database created successfully";
} 
else {
echo "Unsuccesful creating database: ".$conn->error;
}
$conn->close();
?>
