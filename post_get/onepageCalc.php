<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <div class="card-header">
                Calculator
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="num1" placeholder="Enter First Number" class="form-control">
                    <br>
                    <input type="text" name="num2" placeholder="Enter Second Number" class="form-control">
                    <br>
                    <button type="submit" name="calculate" class="btn btn-block btn-outline-primary">
                        Calculate
                    </button>
                </form>
            </div>
        </div>
        <br>

    </div>

    
        <?php
        if (isset($_POST['calculate'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $total = $num1 + $num2;
            $subtract = $num1 - $num2;
            $multiply = $num1 * $num2;
            $division = $num1 / $num2;
            echo "<div class = 'row'>";
                 echo "<div class = 'col-12 text-center'>";
                     echo "addition result: ";
                 echo "<h2 class = 'display-2 text-center'>" . $total . "<h2>";
                 echo "</div>";
            echo "</div>";

            echo "<div class = 'row'>";

            echo "<div class = 'col-6 text-center lead'>";
            echo "Subtraction result: ";
            echo "<h2 class = 'display-2 text-center lead'>" . $subtract . "<h2>";
            echo "</div>";
            echo "<div class = 'col-6 text-center lead'>";
            echo "Multiplication";
            echo "<h2 class = 'display-2 text-center'>" . $multiply . "<h2>";
            echo "</div>";
            echo "</div>";

            echo "<div class = 'row'>";
            echo "<div class = 'col-12 text-center lead'>";
            echo "Division Result";
            echo "<h2 class = 'display-2 text-center'>" . $division . "<h2>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>