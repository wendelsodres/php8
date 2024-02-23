<?php
    if(isset($_POST['form1'])) {
        $file_name = $_FILES['my_file']['name'];
        $path_tmp = $_FILES['my_file']['tmp_name'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES['my_file']['tmp_name']);
        $size = ceil($_FILES['my_file']['size']/1024);

        echo $file_name;

        $file_size = getimagesize($path_tmp); //width an height image only 

        // move_uploaded_file($path_tmp, '../uploads/'.'teste.png');

        $get_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name_only = pathinfo($file_name, PATHINFO_FILENAME);

        $allow_files = ['image/jpg','image/jpeg','image/png','image/webp','image/gif'];

        if(in_array($mime, $allow_files)){
            if($size <= 10000){
                move_uploaded_file($path_tmp, '../uploads/'.$file_name);

                $isAlpha = false;
                if ($mime == 'image/jpeg')
                    $image = imagecreatefromjpeg('../uploads/'.$file_name);
                elseif ($isAlpha = $mime == 'image/gif') {
                    $image = imagecreatefromgif('../uploads/'.$file_name);
                } elseif ($isAlpha = $mime == 'image/png') {
                    $image = imagecreatefrompng('../uploads/'.$file_name);
                } else {
                    return $file_name;
                }
                if ($isAlpha) {
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                }
                imagewebp($image, '../uploads/'.$file_name_only.'.webp', 90);
                unlink('../uploads/'.$file_name);

            } else {
                echo 'File size must be within';
            }
        } else {
            echo 'Invalid Format';
        }

        finfo_close($finfo);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>

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

        <h3 class="title">File Upload</h3>
        <hr>

        <p>Important Codes</p>

        <ul>
            <li><p><strong>$path =$_FILES['my_file']['name]</strong></p></li>
            <li><p><strong>$path_tmp = $_FILES['my_file']['tmp_name']</strong></p></li>
            <li><p><strong>$size = $_FILES['my_file']['size']/1024</strong></p></li>
            <li><p><strong>$data = getimagesize($path_tmp)</strong></p></li>

            <li><p><strong>$finfo = finfo_open(FILEINFO_MIME_TYPE)</strong></p></li>
            <li><p><strong>$mime = finfo_file($finfo, $_FILES['my_file']['tmp_name']</strong></p></li>
            <li><p><strong>copy($path_tmp, 'uploads/'.$path);</strong></p></li>
            <li><p><strong>move_uploaded_file($path_tmp, 'uploads/'.$path);</strong></p></li>

            <li><p><strong>finfo_close($finfo);</strong></p></li>
         
        </ul>
    </div>   

    <div class="sectionModule">

       <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Select a File:</td>
                    <td><input type="file" name="my_file"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name="form1">
                    </td>
                </tr>
            </table>

       </form>
    </div>   

   
</body>
</html>