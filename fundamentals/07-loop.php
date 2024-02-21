<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop </title>

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

        <h3 class="title">Operator</h3>
        <p class="subtitle">Loops are used to execute the same block of code again and again, as long as a certain condition is true</p>
        <hr>

        <pre>
            <code> 

            $a_while = 1;
            while($a_while < 10) {
                echo "Bangladesh";
                $a_while++;
            }
            
            $while_break = 1;
            while(1) {
                echo "Bangladesh";
                $while_break++;
                if($while_break > 4) {
                    break;
                }
            }
            
            $do_while = 1;
            do {
                echo "Bangladesh";
                $do_while++;
            }while($do_while < 10);
            
            for($i=1;$i<=100;$i+=5) {
                echo $i.' ';
            }   

            $arr_foreach = array("usa","australia","canada");
            foreach($arr_foreach as $val) {
                echo $val;
            }
            
            $arr_names = array(
                "username" => "arefin",
                "age" => 30,
                "password" => "1234"
            );

            foreach($arr_names as $key=>$val) {
                echo "KEY is: " . $key . " and Value is: " . $val;
            }
            
            $arr_numbers = array(12,34,55,77);            
            for($i=0;$i<4;$i++) {
                echo $arr_numbers[$i];
            }
            
            for($i=1;$i<=10;$i++) {                
                if($i==5) {
                    break;
                }

                echo $i;
            }            
           
            for($i=1;$i<=100;$i++) {
                if($i%2 != 0) {
                    echo $i;
                }
            }             
            </code>       
        </pre>

        <?php 

            $a_while = 1;
            while($a_while < 10) {
                echo "Bangladesh<br>";
                $a_while++;
            }
            echo '<hr>';

            $while_break = 1;
            while(1) {
                echo "Bangladesh<br>";
                $while_break++;
                if($while_break > 4) {
                    break;
                }
            }
            echo '<hr>';

            $do_while = 1;
            do {
                echo "Bangladesh<br>";
                $do_while++;
            }while($do_while < 10);

            echo '<hr>';

            for($i=1;$i<=100;$i+=5) {
                echo $i.' ';
            }       
            echo '<hr>';   

            $arr_foreach = array("usa","australia","canada");
            foreach($arr_foreach as $val) {
                echo $val.'<br>';
            }
            echo '<hr>';

            $arr_names = array(
                "username" => "arefin",
                "age" => 30,
                "password" => "1234"
            );

            foreach($arr_names as $key=>$val) {
                echo "KEY is: " . $key . " and Value is: " . $val . '<br>';
            }
            echo '<hr>';

            $arr_numbers = array(12,34,55,77);
            for($i=0;$i<4;$i++) {
                echo $arr_numbers[$i].'<br>';
            }
            echo '<hr>';

            for($i=1;$i<=10;$i++) {
                
                if($i==5) {
                    break;
                }

                echo $i;
                echo '<br>';
            }
            echo '<hr>';

            //Even/Odd numbers
            //2 4 6 8 10
            for($i=1;$i<=100;$i++) {
                if($i%2 != 0) {
                    echo $i.' ';
                }
            }

        ?>
    </div>   

   
</body>
</html>