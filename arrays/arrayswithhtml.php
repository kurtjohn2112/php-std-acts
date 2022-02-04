<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
            <div class="form-group mx-auto w-50">
            <label for="">Enter Item list</label>
            <input type="text" name="info[]" class="form-control"><br>
            <input type="text" name="info[]" class="form-control"><br>
            <input type="text" name="info[]" class="form-control"><br>
            <input type="text" name="info[]" class="form-control">
            <br>
             <button type="submit" name="submit" class="btn btn-outline-success">Display Array</button>
            </div>

    </form>

    <?php 
    if(isset($_POST['submit'])){
    $array = $_POST['info'];
    $arraylen = count($array);

    for($x = 0; $x<$arraylen;$x++){
        echo "<div class = 'alert alert-danger w-50 mx-auto'>".$array[$x]."</div>";
    }
    

    }else{
        echo "<div class = 'alert alert-danger w-50 mx-auto'>You dont have a display</div>";
    }
    
    
    
    
    
    
    ?>
</body>
</html>