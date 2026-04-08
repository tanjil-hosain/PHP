<?php
echo "File name:" . $_FILES['file']['name'];
echo "<br>";
echo "File name:" . $_FILES['file']['type'];
echo "<br>";

echo "File name:" . $_FILES['file']['tmp_name'];
echo "<br>";

echo "File name:" . $_FILES['file']['size'];
echo "<br>";

echo "File name:" . $_FILES['file']['error'];
echo "<br>";

echo "File name:" . $_FILES['file']['full_path'];
echo "<br>";

?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>