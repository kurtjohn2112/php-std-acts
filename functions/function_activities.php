<?php

function user_input($name, $age, $username, $password, $email)
{
    echo "<br>";
    echo "<div class = 'alert alert-success text-uppercase text-center'>Your Name is: <strong>".$name."</strong></div>";
    
    echo "<div class = 'alert alert-success text-uppercase text-center'>Your AGE is: <strong>" .$age."</strong></div>";
   
    echo "<div class = 'alert alert-success text-uppercase text-center'>Your USERNAME is: <strong>" .$username."</strong></div>";
    
    echo "<div class = 'alert alert-success text-uppercase text-center'>Your PASSWORD is: <strong>" .$password."</strong></div>";
    
    echo "<div class = 'alert alert-success text-uppercase text-center'>Your EMAIL is: <strong>" . $email."</strong></div>";
}

function basic_information($name,$age,$email)
{
    echo "<br>";
    echo "<div class = 'alert alert-danger text-uppercase text-center'>Your Name is: <strong>" . $name."</strong></div>";
    echo "<div class = 'alert alert-danger text-uppercase text-center'>Your Age is: <strong>" . $age."</strong></div>";
    echo "<div class = 'alert alert-danger text-uppercase text-center'>Your Email is: <strong>" . $email."</strong></div>";
}
function generate_password($username,$password)
{
    echo "<br>";
    echo "<div class = 'alert alert-warning text-uppercase text-center'>Your Username is: <strong>" . $username."</strong></div>";
    echo "<div class = 'alert alert-warning text-uppercase text-center'>Your Password is: <strong>" . $password."</strong></div>";




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
        <div class="card w-50 mx-auto mt-5">
            <div class="card-header">
            <form action="" method="post">
            <div class="form-group">
                <label for="">Enter First Name</label>
                <input type="text" name="fname" class="form-control">
                <label for="">Enter Age</label>
                <input type="text" name="age" class="form-control">
                <label for="">Enter Username</label>
                <input type="text" name="username" class="form-control">
                <label for="">Enter Password</label>
                <input type="password" name="password" class="form-control">
                <label for="">Enter Email</label>
                <input type="text" name="email" class="form-control">
                <br>
                <button class="btn btn-outline-success btn-block" type="submit" name="submit">Submit</button>
                <button class="btn btn-outline-danger btn-block" type="submit" name="basic">Basic Information</button>
                <button class="btn btn-outline-warning btn-block" type="submit" name="security">Generate Username and Password</button>


            </div>

        </form>

            </div>
           
            <?php 
                
                 if(isset($_POST['submit'])){
                    $fname = $_POST['fname'];
                    $age = $_POST['age'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                   
                    echo ' <div class="card-body">';
                   

                    user_input($fname,$age,$username,$password,$email);
                    echo '</div>';
                }
                if(isset($_POST['basic'])){
                    $fname = $_POST['fname'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                    basic_information($fname,$age,$email);
                }
                if(isset($_POST['security'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    generate_password($username,$password);
                }

        
        
        
        ?>
            </div>
        </div>
        
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>