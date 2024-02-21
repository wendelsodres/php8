<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math </title>

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

        <h3 class="title">Math</h3>
        <p class="subtitle">PHP has a set of math functions that allows you to perform mathematical tasks on numbers</p>
        <hr>
        
        <ul>
            <li><p>pi() = returns the value of PI</p></li>
            <li><p>min() = lowest value in a list of arguments</p></li>
            <li><p>max() =  highest value ina list of arguments</p></li>
            <li><p>abs() = returns the absolute (positive) value of a number</p></li>
            <li><p>sqrt() = returns the square root of a number</p></li>
            <li><p>round() = rounds a floating-point number to its nearest integer</p></li>
            <li><p>rand() = generates a random number</p></li>
            <li><p>rand(min,max) = specify the lowest integer and the highest integer to be returned</p></li>
            <li><p>ceil() = round fractions up</p></li>
            <li><p>floor() = round fractions down</p></li>
        </ul>

        <pre>
            <code> 
                echo pi();  

                echo min(23,44,88);          
            </code>       
        </pre>

        <?php 
            echo '<p>'.pi().'</p>';

            echo '<p>'.min(23,44,88).'</p>';

            echo '<p>'.max(23,44,88).'</p>';

            echo '<p>'.abs(-1234).'</p>';

            echo '<p>'.sqrt(144).'</p>';

            echo '<p>'.round(1.850).'</p>';

            echo '<p>'.rand().'</p>';
           
        ?>
    </div>   

   
</body>
</html>