<?php

    if(isset($_POST['form1'])){        
        setcookie('pr', $_REQUEST['person'], time() + (86400));
        header('location: 09-cookie.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>

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
        <h3 class="title">Cookie</h3>
        <p class="subtitle">
            • A cookie is a small text file that a website
            stores on a user's device when they visit the
            site.
         </p>

        <p>    
            • Cookies are used to remember user
            preferences, login information, and browsing
            history, and to track user behavior on the
            website. They can also be used for targeted
            advertising.
        </p>

        <hr>
        
        <?php
           echo 'Test';

           setcookie('city', 'Feira de Santana', time() + (86400));

           var_dump($_COOKIE['city']);

        ?>       

    </div>   

    <div class="sectionModule">
        <?php if(!isset($_COOKIE['pr'])) : ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            Select Person
                        </td>
                        <td>
                            <select name="person">
                                <option value="Wendel">Wendel</option>
                                <option value="Kauã">Kauã</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td>
                            <input type="submit" value="Submit" name="form1">
                        </td>
                    </tr>

                </table>
            </form>
        <?php else : ?>
            <p>You already have iven vote to <?php echo $_COOKIE['pr'];?>. Please come here after 24 hours.</p>
        <?php endif; ?>
    </div>   

   
</body>
</html>