<?php 

$servername = "mysql";
$username = "root";
$pass = "abc102030";
$dbname = "php8";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
   echo "Connection failed:" . $e->getMessage();     
}  

