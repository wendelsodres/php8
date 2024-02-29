<?php 
    $servername = "mysql";
    $username = "root";
    $pass = "abc102030";
    $dbname = "php8";
    $result;
 
   try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pass);
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
   } catch (PDOException $e) {
       echo "Connection failed:" . $e->getMessage();     
   }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Pagination</title>
</head>
<body>

   <div class="container">   
      <?php
         $per_page = 4;
         $query = $conn->prepare("SELECT * FROM user");
         $query->execute();
         $total = $query->rowCount();

         $total_pages = ceil($total/$per_page);        

         if(!isset($_REQUEST['p'])) {
            $start = 1;
         } else {
            $start = $per_page * ($_REQUEST['p'] -1) + 1;
         }
         $j=0;
         $k=0;
         $arr = [];
         $res = $query->fetchAll();

         foreach($res as $row) {
            $j++;

            if($j>=$start){
               $k++;
               if($k>$per_page) {break;}
               $arr[] = $row['id'];
            }
         }     
      ?>              

      <?php 

         $statement = $conn->prepare("SELECT * FROM user");
         $statement->execute();

         $result = $statement->fetchAll(PDO::FETCH_ASSOC);

         echo '<div class="d-flex justify-content-center">';
         foreach ($result as $row) {
            if(!in_array($row['id'],$arr)){
               continue;
            }     

         echo "<div class=\"card\" style=\"width: 18rem;\">        
               <div class=\"card-body\">
               <h5 class=\"card-title\">{$row['name']}</h5>
               <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href=\"#\" class=\"btn btn-primary\">Saiba mais</a>
               </div>
               </div>";
            }
         echo '</div>';

         echo '<ul class="my-3 pagination d-flex justify-content-center">';
         echo '<li class="page-item"><a class="page-link" href="http://localhost/php8/pagination/01-pagination.php?p='.(isset($_REQUEST['p']) && ($_REQUEST['p'] > 1) ? $_REQUEST['p']-1 : '1').'">Previous</a></li>';
         for($i=1; $i <=$total_pages; $i++){
            echo '<li class="page-item '.((isset($_REQUEST['p']) && $_REQUEST['p'] == $i) || !isset($_REQUEST['p']) && $i == 1 ? 'active' : '').'"><a class="page-link" href="http://localhost/php8/pagination/01-pagination.php?p='.$i.'">'.$i.'</a></li>';
         }
         echo '<li class="page-item"><a class="page-link" href="http://localhost/php8/pagination/01-pagination.php?p='.((isset($_REQUEST['p']) && ($_REQUEST['p'] < $total_pages)) ? $_REQUEST['p']+1 : $total_pages).'">Next</a></li>';
         echo '</ul>';
      ?>
   </div>
   
</body>
</html>