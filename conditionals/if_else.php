<?php

function decide($input){
  if ($input >= 20) {

    ?>
        <div class="alert alert-success w-50 mx-auto mt-3 text-center">
          <strong>Congratulations!</strong> You can Drink!!
        </div>
      <?php

      } else {
      ?>
        <div class="alert alert-danger w-50 mx-auto mt-3 text-center">
          <strong>SORRY!!</strong> You Cannot Drink :<
        </div>
    <?php

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
    <div class="card mx-auto  text-center mt-5 w-25">
      <div class="card-header">
        CAN I DRINK? APP v1.0
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="">Enter Age</label>
            <input type="number" class="form-control" name='data' id="" aria-describedby="helpId" placeholder="">
            <br>
            <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Determine</button>
          </div>
        </form>

      </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
      $input = $_POST['data'];

      if ($input >= 20) {

        ?>
            <div class="alert alert-success w-50 mx-auto mt-3 text-center">
              <strong>Congratulations!</strong> You can Drink!!
            </div>
          <?php
    
          } else {
          ?>
            <div class="alert alert-danger w-50 mx-auto mt-3 text-center">
              <strong>SORRY!!</strong> You Cannot Drink :<
            </div>
        <?php
    
          }
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