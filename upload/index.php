<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload/download</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload file" name="submit">

       
      </form>
    <div class="uploads">
        <?php 
        include "../connect/conexiune.php";
        $dir = opendir('uploads');
        $count=0;
        $ok=0;
        while (($file = readdir($dir)) !== false)
        {
        $ok++;
        if($ok > 2) {
        $id=$ok-2;
        $query="INSERT IGNORE INTO `file_downloads` (file_id,file_name, clicks) VALUES ('$id','$file','$count')";
        if (!mysqli_query($conexiune, $query)) {
            die(mysqli_error($conexiune));
        }
        echo "<p class=\"title\">$file</p>  <form action=\"uploads\\$file\">
        <input type=\"submit\" value=\"Download\">
    </form> <p class=\"count\"></p> <br>";
        }
        }
        closedir($dir);
        ?>
    </div>
</body>
</html>