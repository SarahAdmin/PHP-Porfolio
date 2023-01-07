<?php 
$db_name="db_k2024417"; 
$db_user="k2024417"; 
$db_password="pooyaiji"; 

$pdo = new PDO("mysql:host = localhost; dbname=$db_name;,$db_user, $db_password); 

$pdo->setAttribute(PDO::ATTR,ERRMODE,PDO:ERRMODE_EXPECTION); 

function getAllUsers { 
global $pdo; 
$statement = $pdo->prepare("SELECT * FROM users"); 
$statement->execute(); 
$result = $statement->fetchAll(PDO::FETCH_CLASS, 'Person'); 
return $result; 
}









?> 
