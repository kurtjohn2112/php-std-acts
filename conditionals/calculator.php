<?php
function calculate($num1, $num2, $op)
{
    if ($op == 'add') {
        return $num1 + $num2;
    } elseif ($op == 'minus') {
        return $num1 - $num2;
    } elseif ($op == 'multi') {
        return $num1 * $num2;
    } else {
        return $num1 / $num2;
    }
}



?>
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
        <form action="" method="post">
            <div class="form-group">
                <div class="row mt-5 text-center">
                    <div class="col-md-6">
                        <input type="text" name="num1" placeholder="Enter First Number" class="form-control m-3">

                    </div>
                    <div class="col-md-6">
                        <input type="text" name="num2" placeholder="Enter Second Number" class="form-control m-3">


                    </div>



                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <input type="radio" name="operator" class="" value="add" id=""> <span class="lead">Addition</span>
                        <input type="radio" name="operator" value="minus" id=""><span class="lead">Subtraction</span>
                        <input type="radio" name="operator" value="multi" id=""><span class="lead">Multiplication</span>
                        <input type="radio" name="operator" value="div" id=""><span class="lead">Division</span>

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <button type="submit" name="calculate" class="btn btn-outline-secondary btn-block ">Calculate</button>

                    </div>

                </div>

            </div>
        </form>
        <?php 
            if(isset($_POST['calculate'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                
               echo '<div class="jumbotron text-center">';
            
                echo "<h2 class = 'display-3'>".calculate($num1,$num2,$operator)."</h2>";
                
                
              echo '</div>';



            }
        
        
        
        
        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>