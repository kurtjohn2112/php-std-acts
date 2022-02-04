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
    <div class="container mx-auto mt-5">
        <form action="" method="post" class="mx-auto">
            <div class="row">
                <div class="form-group col-md-12">
                    <h2 class="display-4 text-center">How many people are going to eat?</h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mx-auto">
                    <input type="text" name="numberOfPeople" id="inputNumberOfPeople" class="form-control form-control-lg text-center border border-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mx-auto">
                <input type="submit" name="submit" value="Submit" class="btn btn-success form-control text-uppercase">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $numberOfPeople = $_POST['numberOfPeople'];

        echo "<hr>";
        echo "<div class='container mx-auto mt-5'>";
        echo "<h1 class='text-center display-4 mb-4'>Ages of the people attending:</h1>";
        echo "<form method='post' action=''>";
            for($a = 0; $a < $numberOfPeople; $a++){
                echo "<div class='row'>
                            <div class='form-group col-md-6 mx-auto'>
                                <input type='text' name='age[]' id='inputAges' class='form-control form-control-lg text-center' placeholder='Enter Age here'>
                            </div>
                    </div>";
                echo "<br>";
            }
            // echo "<input type='hidden' name='numberOfPeople' value='$numberOfPeople'><br>";
            echo "<div class='row'>
                    <div class='col-md-3 mx-auto'>
                    <input type='submit' name='save' value='Save' class='btn btn-primary form-control text-uppercase mb-5'>
                </div>
                </div>";
        echo "</form>";
        echo "</div>";
    }

    if(isset($_POST['save'])){
        $age = $_POST['age']; //TO GET THE AGES FROM THE FORM
        $discounted_price = array(); //TO MAKE A PRICE ARRAY
        $rate = 325.0; //TO INITIALIZE THE RATE
        $total = 0; //TO INITIALIZE THE TOTAL

        // $ageCounter = array(0,0,0,0);

        // print_r($age);

        $numberOfPeople = count($age);//TO COUNT FROM THE ARRAY, NOT THE FORM.

        echo "<div class='container w-50 mx-auto mt-5'>";
        echo "<table class='table table-bordered border border-dark w-50 mx-auto'>";
            echo "<thead class='thead-dark text-center'>
                <tr>
                    <th>AGES</th>
                    <th>PRICE</th>
                </tr>
                </thead>";
            echo "<tbody>";
        for($i = 0; $i < $numberOfPeople; $i++){
            if($age[$i] >= 0 && $age[$i] <=5){
                $discounted_price[$i] = $rate * 0;
              
                echo "<tr>
                        <th>Age 0 - 5: </th>
                        <th class='text-right'>".$discounted_price[$i]."</th>
                    </tr>";

            }elseif($age[$i] >= 6 && $age[$i] <= 10){
                $discounted_price[$i] = $rate * 0.10; //10%
                $discounted_price[$i] = $rate - $discounted_price[$i];
                

                echo "<tr>
                        <th>Age 6 - 10: </th>
                        <th class='text-right'>".$discounted_price[$i]."</th>
                    </tr>";

            }elseif($age[$i] >= 60){
                $discounted_price[$i] = $rate * 0.05;//5%
                $discounted_price[$i] = $rate - $discounted_price[$i];

                
                echo "<tr>
                        <th>Age 60 & above: </th>
                        <th class='text-right'>$discounted_price[$i]</th>
                    </tr>";

            }elseif($age[$i] >= 11 && $age[$i] <= 59){
                $discounted_price[$i] = $rate;
                // $ageCounter[2]++;

                echo "<tr>
                        <th>Age 11 - 59: </th>
                        <th class='text-right'>$discounted_price[$i]</th>
                    </tr>";

                // echo "Age 11-59: $ageCounter[2] = $age[$i] =".$discounted_price[$i]."<br>";
            }

            $total = $total + $discounted_price[$i];
          
        }

        echo "<tr>
                <th class='text-white bg-danger border-right  border-danger'>Total Price: </th>
                <th class='text-right text-white bg-danger  border-danger'>$total</th>
            </tr>";

            echo "<tr>
                    <th class='text-white bg-primary border-right  border-primary'>Number of People: </th>
                    <th class='text-right text-white bg-primary border-right  border-primary'>$numberOfPeople</th>
                ";

        echo "</tbody>";
        echo "</table>";

        echo "</div>";

    }
?>