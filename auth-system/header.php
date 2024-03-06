<?php 
   ob_start();      
   define('BASE_URL','http://php8.test/auth-system/');
   require_once('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

   <div class="wrapper">
      <div class="container">

         <div class="nav">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="registration.php">Registration</a></li>
               <li><a href="login.php">Login</a></li>
               <li><a href="dashboard.php">Dashboard</a></li>
               <li><a href="logout.php">Logout</a></li>
            </ul>
         </div>