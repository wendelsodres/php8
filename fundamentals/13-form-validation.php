<?php

    if(isset($_POST['form1'])){
        //     if(trim($_POST['name']) == ''){
        //         echo 'Name can not be empty<br>';
        //     }  

        //     if(trim($_POST['email']) == ''){
        //         echo 'Email can not be empty<br>';
        //     }  else {
        //         if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //             echo 'Email must be valid<br>';
        //         }
        //     }

        //     if(trim($_POST['name']) != '' && $_POST['email'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //         echo 'Success';
        //     }
        // }

        try {

            if($_POST['name'] == ''){
                throw new Exception('Name can not be empty');
            }

            if($_POST['email'] == ''){
                throw new Exception('Email can not be empty');
            }

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Email is invalid');
            }

            $success_message =  "Success!";

            unset($_POST['name']);
            unset($_POST['email']);

        } catch (Exception $e) {
            $error_message = $e->getMessage();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

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

        <h3 class="title">Form Validation</h3>
        <hr>

        <ul>
            <li><p><strong>r</strong>Open a file for read only. File pointer starts at the beginning of the file</p></li>
          
        </ul>
    </div>
    
    <div class="sectionModule">

        <pre>
            <code>
                Metodo 1
                if(isset($_POST['form1'])){
                    if(trim($_POST['name']) == ''){
                        echo 'Name can not be empty';
                    }  

                    if(trim($_POST['email']) == ''){
                        echo 'Email can not be empty';
                    }  else {
                        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                            echo 'Email must be valid';
                        }
                    }

                    if(trim($_POST['name']) != '' && $_POST['email'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        echo 'Success';
                    }
                }

                Metodo 2

            </code>
        </pre>
    </div>

    <div class="sectionModule">
        <?php
            if(isset($success_message)){
                echo '<div style="color:green;">'.$success_message.'</div>';
            }
            if(isset($error_message)){
                echo '<div style="color:red;">'.$error_message.'</div>';
            }
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="form1"></td>
                </tr>
            </table>
        </form>       
    </div>  
   
</body>
</html>