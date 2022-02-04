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