<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>

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

        <h3 class="title">String Functions</h3>
        <hr>
        
        <ul>
            <li><p>strlen() = return the length of a string</p></li>
            <li><p>strtoupper() = converts a string to uppercase letter</p></li>
            <li><p>strtolower() converts a string to lowercase letter</p></li>
            <li><p>ucwords() = converts the first character of each word in a string to uppercase</p></li>
            <li><p>trim() = removes whitespace or other characters from both sides of a string</p></li>
            <li><p>str_replace() - replace text within a string</p></li>
            <li><p>substr() = extract certain characters in a string</p></li>
            <li><p>chunk_split = splits a string into a series of smaller parts</p></li>
        </ul>

        <pre>
            <code>           
                $str_len = strlen("Hello World");

                echo $str_len;

                echo strtoupper("My name is Wendel");

                echo strtolower("My name is Wendel");

                echo ucwords("my name is wendel");

                echo trim(" my name is wendel ");

                echo trim(" my name is wendel ");

                $str =  "I'm Wendel and ";
                echo str_replace("Wendel","Manoel", $str);

                $birth = "1988-03-23";
                //23/03/1988
                echo substr($birth,0,4); //echo Year

                echo substr($birth,5,2); //echo month

                echo substr($birth,8,2); //echo day

                $str_chunk_split = "ManoelSilva";

                echo chunk_split($str_chunk_split,3,'-'); //echo day
            </code>
        </pre>

        <?php 
           $str_len = strlen("Hello World");

           echo $str_len;

           echo '<p>'.strtoupper("My name is Wendel").'</p>';
           
           echo '<p>'.strtolower("My name is Wendel").'</p>';

           echo '<p>'.ucwords("my name is wendel").'</p>';

           echo '<p>'.trim(" my name is wendel ").'</p>';

           echo '<p>'.trim(" my name is wendel ").'</p>';

           $str =  "I'm Wendel and ";
           echo '<p>'.str_replace("Wendel","Manoel", $str).'</p>';

           $birth = "1988-03-23";
           //23/03/1988
           echo '<p>'.substr($birth,0,4).'</p>'; //echo Year

           echo '<p>'.substr($birth,5,2).'</p>'; //echo month

           echo '<p>'.substr($birth,8,2).'</p>'; //echo day

           $str_chunk_split = "ManoelSilva";

           echo '<p>'.chunk_split($str_chunk_split,3,'-').'</p>'; //echo day

        ?>
    </div>   

   
</body>
</html>