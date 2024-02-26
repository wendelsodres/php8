<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File IO</title>

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

        <h3 class="title">File IO</h3>
        <hr>

        <p>Read File : Function needs: fopen</p>

        <ul>
            <li><p><strong>r</strong>Open a file for read only. File pointer starts at the beginning of the file</p></li>
            <li><p><strong>'r+'</strong> Open a file for read/write. File pointer starts at the beginning of the file</p></li>
            <li><p><strong>'w'</strong> Open a file for write only. File pointer starts at the beginning of the file</p></li>
            <li><p><strong>'w+'</strong> Open a file for read/write. Erases the contens of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</p></li>

            <li><p><strong>'a'</strong></p> Open a file for write only. The existing data in file is preserved. Creates a new file if the file doesn't exist. File pointer starts at the end of the file</li>
            <li><p><strong>'a+'</strong></p> Open a file for read/write. The existing data in file is preserved. Creates a new file if the file doesn't exist. File pointer starts at the end of the file</li>
        </ul>
    </div>
    
    <div class="sectionModule">

        <pre>
            <code>
                if($fh = fopen('12-file-io-a.txt', 'r')){
                    while(!feof($fh)){
                        $line = fgets($fh);
                        echo $line.'<br>';
                    }

                    fclose($fh);
                }

                echo '<hr>';
                
                $file = file_get_contents('12-file-io-a.txt');
                echo nl2br($file);

                $file_lines = file('12-file-io-a.txt');

                foreach($file_lines as $line){
                    echo $line;
                }

                $file_name = '12-file-io-b.txt';
                $file_b = fopen($file_name, 'w');
                if($file_b ==  false){
                    echo 'Error in opening file';
                    exit();
                }

                fwrite($file_b, "Salvador\nMadre de Deus\nIaçu");
                fclose($file_b);

                $file_name_b = '12-file-io-b.txt';
                $file_new_b = fopen($file_name_b, 'a');

                if($file_new_b == false){
                    echo 'Error in opening file';
                    exit();
                }

                fwrite($file_new_b, "\nSimões Filho\nPecaeta");
                fclose($file_new_b);

                $file = file_get_contents('12-file-io-b.txt');
                echo nl2br($file); 
            </code>
        </pre>
    </div>

    <div class="sectionModule">

        <?php            

            if($fh = fopen('12-file-io-a.txt', 'r')){
                while(!feof($fh)){
                    $line = fgets($fh);
                    echo $line.'<br>';
                }

                fclose($fh);
            }

            echo '<hr>';
            
            $file = file_get_contents('12-file-io-a.txt');
            echo nl2br($file);
            
            echo '<hr>';

            $file_lines = file('12-file-io-a.txt');

            foreach($file_lines as $line){
                echo $line.'<br>';
            }

            $file_name = '12-file-io-b.txt';
            $file_b = fopen($file_name, 'w');
            if($file_b ==  false){
                echo 'Error in opening file';
                exit();
            }

            fwrite($file_b, "Salvador\nMadre de Deus\nIaçu");
            fclose($file_b);

            $file_name_b = '12-file-io-b.txt';
            $file_new_b = fopen($file_name_b, 'a');

            if($file_new_b == false){
                echo 'Error in opening file';
                exit();
            }

            fwrite($file_new_b, "\nSimões Filho\nPecaeta");
            fclose($file_new_b);

            $file = file_get_contents('12-file-io-b.txt');
            echo nl2br($file);
            
            echo '<hr>';
        ?>
    </div>  
   
</body>
</html>