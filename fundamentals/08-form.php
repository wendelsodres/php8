<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Get And POST</title>

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
        <h3 class="title">GET And POst</h3>
        
        <?php
            if(isset($_REQUEST['form1'])){
                echo $_REQUEST['name'].'<br>';
                echo $_REQUEST['email'];
            }
        ?>

        <form action="" method="POST">
            <div>
                <div>Name:</div>    
                <input type="text" name="name">
            </div>
            <div>
                <div>E-mail:</div>
                <input type="text" name="email" autocomplete="off">
            </div>
            <div>
                <div>Password:</div>
                <input type="password" name="password">
            </div>
            <div>
                <button type="submit" value="Submit" name="form1">Submit</button>
            </div>
            
        </form>

    </div>   

   
</body>
</html>