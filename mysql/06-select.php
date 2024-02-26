<?php

   $servername = "mysql";
   $username = "root";
   $pass = "abc102030";
   $dbname = "php8";
   $result;

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $query = $conn->prepare("SELECT distinct(name),email FROM user");
      $query->execute();

      $result = $query->fetchAll(PDO::FETCH_ASSOC);
   } catch (PDOException $e) {
      echo "Connection failed:" . $e->getMessage();     
   }  

?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql Select</title>

    <style>
        *,:after,:before,html{
            box-sizing:border-box
        }
        html{font-family:sans-serif;font-size:10px;height:100%}
        body{color:#666;font-family:Verdana, Geneva, Tahoma, sans-serif;line-height:1;margin:0;padding:0}
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{
            display:block}h1,h2,h3,h4,h5,h6{margin:16px 0}
        ol,ul{margin:0;padding:0}
        li{line-height:1.2}
        a{text-decoration:none}
        a,p{font-size:1.6rem}        

        .sectionModule {
            background-color: #2c3e50;
            margin: 24px auto;
            max-width: 1250px;
            padding: 12px 24px;
            border-bottom: 4px solid #333;
            color: #ccc;
        }

        .title {
            color: #fff;
            font-size: 18px;
        }

        pre {
            display: block;
            background-color: #272822;
            color: #f8f8f2;
            border-radius: 0.3rem;
            padding: 4px 5px 5px;       
            line-height: 1.4;
        }

        pre code {
            white-space: inherit;
            font-size: 14px;
            color: #f3f3f3;
        }     

        .resCode {
            font-size: 16px;
        }

    </style>
</head>
<body>

    <div class="sectionModule">

        <h3 class="title">Mysql - Select Query(...)</h3>
        <hr>

        <ul>
            <li><p><strong>PDO::FETCH_ASSOC</strong>Retrieves data from a database query as an associative array</p></li>
            <li><p><strong>PDO::FETCH_NUM</strong> Retrieves data from a database query as numeric array</p></li>
            <li><p><strong>PDO::FETCH_COLUMN</strong> Get plain one-dimensional array -- First column (from select items first one) will be fetched</p></li>
            <li><p><strong>PDO::FETCH_GROUP'</strong> This mode groups the returned rows into a nested array, where indexes will be unique values from the first column, and values be arrays similar to ones returned by regular fetchAll</p></li>
            <li><p><strong>PDO::FETCH_GROUP | PDO::FETCH_COLUMN</strong> This one groups the first column with all values from the second column</p></li>ă
            <li><p><strong>PDO::FETCH_BOTH</strong> Retrieves data from a database query as an associative array and a numeric array</p></li>
            <li><p><strong>SELECT distinct(ATRIBUTO)</strong> This used to return only distinct(different) values</p></li>
            <li><p><strong>SELECT max(ATRIBUTO number)</strong> SELECT MAX returns the largest value for a column</p></li>
            <li><p><strong>SELECT min(ATRIBUTO number)</strong> SELECT MIN returns the smallest value for a column</p></li>
            <li><p><strong>COUNT(),SUM(),AVG</strong> </p></li>
          
        </ul>
    </div>
    
    <div class="sectionModule">

        <pre>
            <code>
               $servername = "mysql";
               $username = "root";
               $pass = "abc102030";
               $dbname = "php8";

               try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
                  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                  $query = $conn->prepare("SELECT name,email FROM user");
                  $query->execute();

                  $result = $query->fetchAll(PDO::FETCH_ASSOC);

                  foreach ($result as $vv) {
                     echo $vv['name'];
                  }

               } catch (PDOException $e) {
                  echo "Connection failed:" . $e->getMessage();     
               }  

            </code>
        </pre>
    </div>

    <div class="sectionModule">  
      <?php 
         foreach ($result as $vv) {
            echo $vv['name'].'<br>';
         }
      ?>       
    </div>  
   
</body>
</html>