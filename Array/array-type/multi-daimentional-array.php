<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .list-style{
            color: green;
            list-style-type: square;

        }
    </style>
</head>
<body>
    <?php
$letter = [
    ["A", "B","C","D"],
    ["E","F","G","H"],
    [1,2,3,4,5]
];

for($i=0; $i<count($letter); $i++){
     echo "<h3>Catagori " . ($i + 1) . "</h3>";
    
    echo "<ul>";
    for($j=0; $j < count($letter [$i]); $j++){
        echo "<li>". $letter[$i][$j] ."</li>";

    }
    echo "</ul>";
}

$people= [
    ["A", "B","C","D"],
    ["E","F","G","H"],
    [1,2,3,4,5]
];

foreach($people as $ordinary){
    echo "<ul class = 'list-style'>";
    foreach($ordinary as $genarel){
        echo "<li >" .$genarel . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>