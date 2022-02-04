<?php
function checkGrade($number)
{

    if ($number > 0 && $number <= 100) {
        if ($number <= 100 && $number >= 95) {
            echo "<div class ='alert alert-success text-center'><strong>Grade: A <br> </strong> YOU PASSED!</div>";
        } elseif ($number <= 94 && $number >= 90) {
            echo "<div class ='alert alert-success text-center'><strong>Grade: B <br> </strong> RIGHT ON! AIM HIGHER !</div>";
        } elseif ($number <= 89 && $number >= 80) {
            echo "<div class ='alert alert-warning text-center'><strong>Grade: C <br> </strong> STUDY HARDER AND AIM HIGHER BROTHER !</div>";
        } elseif ($number <= 80) {
            echo "<div class ='alert alert-danger text-center'><strong>Grade: F <br> </strong> YOU FAILED. WHY THO?!</div>";
        }
    } else {
        
        echo "Wrong Number";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js.css">
    <title>Day</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <div class="card-header">
                <form method="post">
                    <div class="form-group mt-5">
                        <input type="number" name="number" class="form-control" placeholder="Enter a number" autofocus> <br>
                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Submit">
                </form>
            </div>
            <div class="card-body">
                <?php
                if (isset($_POST["submit"])) {
                    $input = $_POST['number'];

                    checkGrade($input);



                    // $number = getNumber();
                    // checkGrade($number);
                }
                ?>
            </div>
        </div>
    </div>


    </div>

</body>

</html>