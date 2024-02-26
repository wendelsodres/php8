<?php

   $servername = "mysql";
   $username = "root";
   $pass = "abc102030";
   $dbname = "php8";

   try {
      
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("INSERT INTO user(name,email) VALUES (:name, :email)");

     $stmt->bindParam(':name', 'Joaozinho');
     $stmt->bindParam(':email', 'joaozinho@gmail.com');

     $stmt->execute();

      echo "User is inserted successfully";

   } catch (PDOException $e) {
      echo "Connection failed:" . $e->getMessage();     
   }  

?>