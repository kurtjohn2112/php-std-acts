<?php
function building_floor($floor)
{
    if ($floor >= 1 and $floor <= 22) {
        if ($floor >= 1 and $floor <= 5) {
            echo "<div class = 'alert alert-success'>this floors is rented by regus</div>";
        } elseif ($floor >= 6 and $floor <= 10) {
            echo "<div class = 'alert alert-warning'>this floors is rented by cebu land masters</div>";
        } elseif ($floor >= 11 and $floor <= 17) {
            echo "<div class = 'alert alert-secondary'>This floor is rented by Accenture</div>";
        } elseif ($floor >= 18 and $floor <= 22) {
            echo "<div class = 'alert alert-primary'>This floor is rented by KREDO IT</div>";
        }
    } else {
        echo "<div class = 'alert alert-danger'>this building has only 22 floors</div>";
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
        <div class="card mt-5 text-center w-50 mx-auto">
            <div class="card-header">
                <h4 class="display-4">
                    which floor would you like to know the information?
                </h4>
            </div>
            <div class="card-body">
                <form method="post">
                    <!-- <div class="form-group"> -->
                        <label for="">Floor Number</label>
                        <input type="number" name="building_floor" class="form-control" required>
                        <br>
                        <button type="submit" name="check_floor" id="" class="btn btn-primary btn-lg btn-block">Submit</button>

                    <!-- </div> -->
                </form>
                <?php
                if (isset($_POST['check_floor'])) {
                    $floor = $_POST['building_floor'];
                     building_floor($floor);
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