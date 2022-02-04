<?phpm
function computeArea($height)
{
    $area = $height * $height;

    return $area;
}






?>


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
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <div class="card-header">
                <p class="lead">Calculate Area of a square</p>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <input type="text" class="form-control" placeholder="Enter Height of a square" name="height">
                    <br>
                    <input type="submit" name="calculate" class="btn btn-outline-primary btn-block" value="Submit">
                </form>
            </div>
        </div>
        <br>
        <?php
        if (isset($_POST["calculate"])) {
            $height = $_POST["height"];



            echo "<div class = 'alert alert-success text-center'><strong>" . computeArea($height) . "<strong></div>";
        }
        ?>
    </div>
</body>

</html>