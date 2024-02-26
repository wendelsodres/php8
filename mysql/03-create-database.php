<?php

   $servername = "mysql";
   $username = "root";
   $pass = "abc102030";
   $dbname = "php8";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      // $sql = "CREATE DATABASE php8test";
      // $conn->exec($sql);

      $sql = "CREATE TABLE students (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          firstname VARCHAR(30) NOT NULL,
          lastname VARCHAR(30) NOT NULL,
          email VARCHAR(50),
          phone VARCHAR(50))";
      $conn->exec($sql);

      echo "Database php8test is created successfully";

   } catch (PDOException $e) {
      echo "Connection failed:" . $e->getMessage();     
   }  

?>