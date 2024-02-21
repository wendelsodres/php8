<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>

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

        <h3 class="title">01 - Variable</h3>
        <hr>
        
        <ul>
            <li><p>Variable starts with $ sign</p></li>
            <li><p>Variable name starts with letter or _ (Underscore)</p></li>
            <li><p>Variable name can not start with number </p></li>
            <li><p>Variable name can only contain alpha-numeric characters(A-Z,a-z, 0-9) and underscores(_)</p></li>
            <li><p>Variable name is case sensitive</p></li>
        </ul>

        <pre>
            <code>           
                $hello_world = 'Hello World, $hello_wolrd variable printed with echo';           
            </code>
        </pre>

        <?php 
            $hello_world = 'Hello World, $hello_wolrd variable printed with echo';
            echo '<p>'.$hello_world.'</p>';
        ?>
    </div>

    <div class="sectionModule">

        <h3 class="title">02 - Variable Scope</h3>
        <hr>
        
        <ul>
            <li><p>A variable declared outside a function can only be accessed outside a function</p></li>           
        </ul>

        <pre>
            <code>
    
                < ?php 
                    $age = 30; //global Scope
    
                    function myAge() {
                        echo $age;
                    }
    
                    myAge();
                ?>
            </code>
        </pre>

        <div class="resCode">
            Result: 30
        </div>
       
    </div>

    <div class="sectionModule">

        <h3 class="title">03 - Data Types</h3>
        <p>Supported Data Types</p>
        <hr>
        
        <ul>
            <li><p>String</p></li>           
            <li><p>Integer</p></li>           
            <li><p>Float</p></li>           
            <li><p>Boolean</p></li>           
            <li><p>Array</p></li>           
            <li><p>Object</p></li>           
            <li><p>Null</p></li>           
            <li><p>Resource</p></li>           
        </ul>

        <pre>
            <code>
    
                < ?php 
                    //String
                    $name = 'Wendel Sodré'
                    
                    //Integer
                    $age = 35;

                    //Float
                    $price_product = 3.50;

                    //Boolean
                    $is_active = false;

                    //Array
                    $animals = array('Cat','Dog','Horse');    

                    //Objects
                    class Car{
                        public name;
                        public brand;
                    }

                    $car1 = new Car();
                    
                ?>
            </code>
        </pre>
    </div>

    <div class="sectionModule">

        <h3 class="title">04 - Type Casting</h3>
        <p>Type casting is the process of converting a variable from one data type to another</p>
        <hr>

        <pre>
            <code>
    
                < ?php 
                    $a = '10';
                    $a = (int)$a; 
                    var_dump($a);
                ?>
            </code>
        </pre>

        <div class="resCode">
            <?php                 
                $a = '10';
                $a = (int)$a;
                var_dump($a);            

            ?>  
        </div>       
    </div>        
</body>
</html>