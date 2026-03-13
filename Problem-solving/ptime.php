<form action="#" method="post">
    Enter Your Number: 
    <input type="text" name="marks"><br>
    <input type="submit" name="submit" value="Check Prime NUmber">
</form>
<?php
if(isset($_POST['submit'])){
    $marks= $_POST['marks'];
    $count=0;
    {
        if($marks <=1){
            echo $marks. " The number is not Prime Or Compositor";
        }
        else{
            for($i= 2; $i < $marks; $i++){
                if($marks % $i === 0){
                    $count++;
                    break;
                }
            }
            if($count==0){
                echo $marks. " It's Prime Number";
            } else{
                echo $marks. "  It's not a Prime NUmber";
            }
        }

    }
}
?>