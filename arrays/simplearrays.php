<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Enter how many input type</label>
        <input type="number" name="input_number" id="">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['input_number'];
        echo "<form method = 'post'>";
        for ($x = 1; $x <= $number; $x++) {

            echo "<br>";
            echo "<input type ='text' name = 'name[]'>";
            echo "<br>";
        }
        echo "<button type = 'submit' name = 'send'>Send</submit>";
        echo "</form>";
    }
    if(isset($_POST['send'])){
        $names = $_POST['name'];
        $length = count($names);
        for($y =0; $y < $length;$y++){
            echo $names[$y];
            echo "<br>";
        }
    }
    ?>
</body>

</html>