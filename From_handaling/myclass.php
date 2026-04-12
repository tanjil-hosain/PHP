<?php
class Person {
    public $name;
    public $batch;

    public function __construct($name, $batch) {
        $this->name = $name;
        $this->batch = $batch;
    }
}

class Student extends Person {
    public $id;

    function __construct($id, $name, $batch) {
        parent::__construct($name, $batch);
        $this->id = $id;
    }

    // ১. Data save korar function
    function store() {
        $singel_data = $this->id . "," . $this->name . "," . $this->batch . "\n";
        file_put_contents("store.txt", $singel_data, FILE_APPEND);
    }

    // ২. Data search korar function (Eitai missing chilo)
    function searchById($searchId) {
        if (file_exists("store.txt")) {
            $data = file("store.txt");
            foreach ($data as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $myArray = explode(",", $line);
                    // $myArray[0] holo ID
                    if (isset($myArray[0]) && $myArray[0] == $searchId) {
                        return $myArray; // Data mille array-ta pathiye dibe
                    }
                }
            }
        }
        return null; // Na mille null pathabe
    }

    // ৩. Sob data table akare dekhano
    function display() {
        if (file_exists("store.txt")) {
            $data = file("store.txt");
            echo "<h4>Registered Students:</h4>";
            echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%;'>";
            echo "<tr style='background-color: #f2f2f2;'>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                  </tr>";

            foreach ($data as $singel_line) {
                $line = trim($singel_line);
                if (!empty($line)) {
                    $myArray = explode(",", $line);
                    if (count($myArray) >= 3) {
                        echo "<tr>
                                <td>{$myArray[0]}</td>
                                <td>{$myArray[1]}</td>
                                <td>{$myArray[2]}</td>
                              </tr>";
                    }
                }
            }
            echo "</table>";
        } else {
            echo "No data found in store.txt";
        }
    }
}
?>