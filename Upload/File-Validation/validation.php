<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    if(isset($_POST['submitbtn'])){
        $fileName = $_FILES['f']['name']; 
        $tmp = $_FILES['f']['tmp_name'];
        $typ = pathinfo($fileName, PATHINFO_EXTENSION); 
        $s = "img/";
        if($typ == "jpg" || $typ == "png"){ 
        move_uploaded_file("$tmp", "$s.$fileName");
         }
         else {
            echo "only jpg, png uploaded";
         } //move_uploaded_file("form", "to");
    }

?>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
        <input type="file" name="f" id="">
        <input type="submit" name="submitbtn" id="">

    </form>
    <?php
    if(isset($_POST["submitbtn"])){
        echo"<img src = '$s.$fileName' alt='image' width='400px'>";
    }
    ?>
</body>
</html>