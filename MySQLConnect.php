<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
  die("Connection Unsuccessful: ".$conn->connect_error); 
}
echo "Connection Successfully";
?>
