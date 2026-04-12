<?php
require_once "myclass.php";

// Data Submit Logic
if (isset($_POST["btnsubmit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $batch = $_POST["batch"];

    $user = new Student($id, $name, $batch);
    $user->store();
    echo "<p style='color:green;'>Form Submitted Successfully!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
</head>
<body>

    <h2>Add Student Data</h2>
    <form action="" method="post">
        ID: <br>
        <input type="text" name="id" placeholder="ID" required> <br><br>
        Name: <br>
        <input type="text" name="name" placeholder="Name" required><br><br>
        Batch: <br>
        <input type="text" name="batch" placeholder="Batch" required><br> <br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>

    <hr>

    <h2>Search Student</h2>
    <form action="" method="post">
        <input type="text" name="search_id" placeholder="Enter ID to search" required>
        <input type="submit" name="btnsearch" value="Search Now">
    </form>

    <?php
    // Search Result Logic
    if (isset($_POST["btnsearch"])) {
        $searchId = $_POST["search_id"];
        $searchObj = new Student("", "", ""); // Khali object for searching
        $result = $searchObj->searchById($searchId);

        if ($result) {
            echo "<h3>Search Result Found:</h3>";
            echo "<p><strong>ID:</strong> $result[0] <br> 
                     <strong>Name:</strong> $result[1] <br> 
                     <strong>Batch:</strong> $result[2]</p>";
        } else {
            echo "<p style='color:red;'>ID: $searchId not found in our records.</p>";
        }
    }

    echo "<hr>";
    
    // Display all data
    $displayObj = new Student("", "", "");
    $displayObj->display();
    ?>

</body>
</html>