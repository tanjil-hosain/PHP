<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $REQUEST ER MADDOME GET AND POST 2 TA ER KAJ E KORA JAY, R JODI $GET NAD $POST NILE JOTHAKROOME GET AND POST E BEBOHAR KORTE HOY, POST ER MADDOME BROWSER DEKHA JAY R GET ER MADDHOME URL DEKHA JAY  -->
    <form action="#" method="post">
        Name 
        <input type="text" name="name">
        <input type="submit">

    </form>
    <?php
 echo $_POST['name']; 
    echo "<br>";
    ?>

     <form action="#" method="post">
        Name 
        <input type="text" name="name">
        <input type="submit">

    </form>
    <?php
 echo $_REQUEST['name']; 
    echo "<br>";
    ?>
 <form action="#" method="get">
        Name 
        <input type="text" name="name">
        <input type="submit">

    </form>
    <?php
 echo $_GET['name']; 
    echo "<br>";
    ?>

     <form action="#" method="get">
        Name 
        <input type="text" name="name">
        <input type="submit">

    </form>
    <?php
 echo $_REQUEST['name']; 
    echo "<br>";
    ?>



</body>
</html>