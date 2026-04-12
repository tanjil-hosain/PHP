<?php
class Person {
    public $name;
    public $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }
}

class Student extends Person{
    public $id;

    function __construct($id, $name, $address)
    {
       parent::__construct($name, $address);
        $this->id = $id;
    }
    function store(){
        $singel_data = $this->id. ",". $this->name.",". $this->address."\n";
        file_put_contents("store.txt", $singel_data, FILE_APPEND);
    }

    function display(){
        
        $data = file("store.txt");

            foreach ($data as   $singel_data) {
                $myArray = explode(",",  $singel_data);

                echo "<tr>
                        <td>$myArray[0]</td>
                        <td>$myArray[1]</td>
                        <td>$myArray[2]</td>
                   </tr>";
            }
   }        

}
?>