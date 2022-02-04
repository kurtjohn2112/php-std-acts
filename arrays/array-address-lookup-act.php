<?php
$address = ["Mark" => "New York", "Chris" => "London", "Marie" => "Paris", "Kenzo" => "Istanbul", "Troye" => "Perth"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>The Green Pages</title>
</head>

<body>
   <div class="card w-25 mx-auto my-5">
      <div class="card-header bg-success text-white">
         <h1 class="h2">Welcome to the Green Pages</h1>
      </div>
      <div class="card-body">
         <form action="" method="post">
            <select name="person_place" class="form-select my-2">
               <option value="" hidden>Select Name</option>
            <?php
               foreach ($address as $person => $place) {
                  echo "<option value='$person lives in $place'>$person</option>";
               }
               ?>
            </select>
            <button type="submit" name="btn_submit" class="btn btn-success my-2 float-right">Submit</button>
         </form>
      </div>
         <?php
         if (isset($_POST['btn_submit'])) {
            $person_place = $_POST['person_place']; // $person_place = value at Line 26

            echo "<div class='card-footer'>
                     <p class='h4 text-center'>$person_place</p>
                  </div>";
         }
         ?>
      </div>
</body>

</html>