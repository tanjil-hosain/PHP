<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST["btnsubmit"])){
    $filename=$_FILES["f"]["name"];
    $tmp = $_FILES["f"]["tmp_name"];
    $s= "img/";
    move_uploaded_file("$tmp","$s.$filename");
}
?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="f">
    <input type="submit" name="btnsubmit">
</form>
</body>
</html>
