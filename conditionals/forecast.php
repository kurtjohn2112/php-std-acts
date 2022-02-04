<?php

function forecast($day)
{

    switch ($day) {
        case "monday":
            echo "<div class ='alert alert-success'>Monday would be cloudy</div>";
            break;
        case "tuesday":
            echo "<div class ='alert alert-warning'>Tuesday will have a heavy rain fall</div>";
            break;
        case "wednesday":
            echo "<div class = 'alert alert-danger'>Wednesday will be super hot, keep hydrated</div>";
            break;
        case "thursday":
            echo " <div class ='alert alert-success'>Thursday will have a perfect weather</div>";
            break;
        case "friday":
            echo "<div class = 'alert alert-primary'>it doesnt matter, you'll still go out on friday</div>";
            break;
            // default:
            // echo "write from monday to friday";
            // break;

       
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
            <div class="card w-50 text-center mt-5 mx-auto">
                <div class="card-header bg-danger text-light">
                        <h3 class="display-3">
                            WEATHER FORECAST
                        </h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for=""></label>
                                <select name="day" class = 'form-control' id="">
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                      

                                </select>
                            <br>
                            <button type="submit" name="forecast" id="" class="btn btn-primary btn-lg btn-block">Forecast</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['forecast'])) {
                        $input_day = $_POST['day'];

                         forecast($input_day);
                    }





                    ?>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>