<?php

   $servername = "mysql";
   $username = "root";
   $pass = "abc102030";
   $dbname = "php8";

   $conn = new mysqli($servername,$username,$pass,$dbname);

   if($conn->connect_error){
      die('Connnection Filed:' . $conn->connect_error);
   }

   echo "Connected Successfully";

?>