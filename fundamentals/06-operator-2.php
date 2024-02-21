<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator 2</title>

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

        <h3 class="title">Increment /Decrement Operatorr</h3>
        <hr>

        <ul>
            <li><p>++$x | Pre-increment</p></li>
            <li><p>$x++ | Post-increment</p></li>
            <li><p>--$x | Pre-decrement</p></li>
            <li><p>$x-- | Post-decrement</p></li>     
        </ul>

        <table border="1" width="400">
            <tr>
                <td>Operator</td>
                <td>Name</td>
            </tr>

            <tr>
                <td>and</td>
                <td>And</td>
            </tr>
            <tr>
                <td>or</td>
                <td>Or</td>
            </tr>
            <tr>
                <td>xor</td>
                <td>Xor</td>
            </tr>
            <tr>
                <td>&&</td>
                <td>And</td>
            </tr>
            <tr>
                <td>||</td>
                <td>Or</td>
            </tr>
            <tr>
                <td>!</td>
                <td>Not</td>
            </tr>
        </table>

        <pre>
            <code> 
                $a = 10;
                $b = 50;

                var_dump ($a==10 and $b==20);
                var_dump (Sa==100 or $b==10);
                var_dump (Sa==10 xor $b==50);
                var_dump ($a==10 && $b==50);
                var_dump ($a==10 || $b==50);
                var_dump ($a!=60);

                $s1 = "Bangladesh";
                $s2 = "Khulna";
                echo $s1.$s2;
                $str = "Bangladesh";
                $str .= "USA";
                $str = $str . "USA"
                echo $str;     
                
                $city = 'Feira de Santana';
                echo $city = $city ?? "SP";
            </code>       
        </pre>

        <?php 
            $a = 10;
            $b = 50;
            var_dump ($a==10 and $b==20);
            var_dump ($a==100 or $b==10);
            var_dump ($a==10 xor $b==50);
            var_dump ($a==10 && $b==50);
            var_dump ($a==10 || $b==50);
            var_dump ($a!=60);

            $s1 = "Bangladesh";
            $s2 = "Khulna";
            echo $s1.$s2.PHP_EOL;
            $str = "Bangladesh";
            $str .= "USA";
            $str = $str . "USA";
            echo $str;   

            $city = 'Feira de Santana';
            echo '<p>'.$city = $city ?? "SP".'</p>';               
        ?>
    </div>   

   
</body>
</html>