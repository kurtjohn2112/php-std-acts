<?php

function display_user($fname, $age, $username, $password, $email)
{
    echo "Your Name is: " . $fname;
    echo "<br>";
    echo "Your Age is: " . $age;
    echo "<br>";
    echo "Your Username is: " . $username;
    echo "<br>";
    echo "Your Password is: " . $password;
    echo "<br>";
    echo "Your Email is: " . $email;
}

function addDetails(){

    echo "<form method = 'post'>";
    echo "<div class ='mt-5'>";
    echo "<label for = '' class = 'alert alert-success lead'>Additional Details about you </div>";
    echo "<input type ='text' name ='additional_details' class ='form-control'>";
  
    echo "<button type = 'submit' class ='btn btn-outline-success mb-5 mt-3' name ='additional_info'>ADD DETAILS</button>";
    echo "</div>";
    echo "</form>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card w-75 mx-auto mt-5">
                    <div class="card-header">
                        <h2 class="lead text-center">User Details using functions</h2>
                    </div>
                    <div class='card-body'>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Enter First Name</label>
                                <input type="text" name="fname" class="form-control">
                                <label for="">Enter Age</label>
                                <input type="number" name="age" class="form-control">
                                <label for="">Enter Username</label>
                                <input type="text" name="username" class="form-control">
                                <label for="">Enter Password</label>
                                <input type="password" name="password" class="form-control">
                                <label for="">Enter Email</label>
                                <input type="mail" name="email" class="form-control">
                                <button type="submit" name="basic_info" class="btn btn-outline-secondary btn-block mt-5">Submit</button>
                                <button type="submit" name="more_details" class="btn btn-outline-secondary btn-block">Add info</button>
                            </div>
                        </form>
                    </div>
                </div>





            </div>
            <div class="col-md-6">
                <?php

                if (isset($_POST['basic_info'])) {
                    $fname = $_POST['fname'];
                    $age = $_POST['age'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];


                    echo "<div class = 'alert alert-secondary mt-5 text-danger text-center'>";
                    echo "<h2 class ='display-4'>User Information</h2>";
                  

                    echo "<p class = lead>".display_user($fname, $age, $username, $password, $email)."</p>";
                    
                    echo "</div>";
                   


                } if (isset($_POST['more_details'])) {

                    addDetails();


                } if (isset($_POST['additional_info'])) {
                    $info = $_POST['additional_details'];
                    
                    echo "<div class = 'alert alert-secondary mt-5 text-center'><strong>Added Information is: <strong></div>";
                    echo "<div class = 'alert alert-danger text-center'>".$info."</div>";
                }





                ?>




            </div>



        </div>


    </div>

</body>

</html>