<?php

   $servername = "mysql";
   $username = "root";
   $pass = "abc102030";
   $dbname = "php8";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      // $conn->beginTransaction();
      $sql = "INSERT INTO user (name, email) VALUES ('Juliana Comide','juliana@gmail.com')";
      $conn->exec($sql);
      $conn->exec("INSERT INTO user (name, email) VALUES ('Jussara Comide','jussara@gmail.com')");
      // $conn->commit();

      $last_id = $conn->lastInsertId();

      echo $last_id;

      echo "User is inserted successfully";

   } catch (PDOException $e) {
      echo "Connection failed:" . $e->getMessage();     
   }  

?>