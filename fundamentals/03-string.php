<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String 2 </title>

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
            <li><p>count_cars() - returns information about characters used in a string</p></li>
            <li><p>sprintf() writes a formatted string to a variable</p></li>
            <li><p>str_repeat() = repeats a string a specified number of times</p></li>
            <li><p>str_word_count() = count words in a string</p></li>
            <li><p>strrev() - reverse a string</p></li>
            <li><p>strpos() search for a text within a string</p></li>
            <li><p>strip_tags() = strips HTML and PHP tags from a string</p></li>
        </ul>

        <pre>
            <code> 
                $str = "Feira de Santana is a nice city";
                echo count_chars($str,3);

                $name = "Feira de Santana";
                $age = 85;
                printf("This city name is: %s and his age is %d", $name, $age);

                $str_repeat = "Feira de Santana";
                echo str_repeat($str_repeat);

                $str_word_count = "Feira de Santana is a very nice city";
                echo str_word_count($str_word_count);

                $strrev= "Feira de Santana is a very nice city";
                echo strrev($strrev);

                echo strpos("Feira de Santana is a very nice city","Feira");

                $strip_tags = "alert('Hello World')";
                echo strip_tags($strip_tags);
        
            </code>
        </pre>

        <?php 
            $str = "Feira de Santana is a nice city";
            echo '<p>'.count_chars($str,3).'</p>';

            $name = "Feira de Santana";
            $age = 85;
            printf("This city name is: %s and his age is %d", $name, $age);

            $str_repeat = "Feira de Santana";
            echo '<p>'.str_repeat($str_repeat, 2).'</p>';

            $str_word_count = "Feira de Santana is a very nice city";
            echo '<p>'.str_word_count($str_word_count).'</p>';

            $strrev= "Feira de Santana is a very nice city";
            echo '<p>'.strrev($strrev).'</p>';

            echo '<p>'.strpos("Feira de Santana is a very nice city","city").'</p>';

            $strip_tags = "<script>alert('Hello World')</script>";
            echo strip_tags($strip_tags);
        ?>
    </div>   

   
</body>
</html>