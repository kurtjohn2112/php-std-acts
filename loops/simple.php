<?php 

echo "<form method = 'post'>";
    echo "<input type = 'number' name = 'input'>";
    echo "<button type = 'submit' name = 'button'>Submit</button>";

echo "</form>";


if(isset($_POST['button'])){

    $input = $_POST['input'];

    // echo $input;
    for($x = 1; $x <=$_POST['input']; $x++){
        for($y = 1; $y <=$x;$y++){
            echo "*";
        }echo "<br>";
    }

}


?>