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