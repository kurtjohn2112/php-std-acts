<?php 
$data = array();
$data[] = $_POST['data'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];

// print_r($data);

foreach($data as $key => $value){
    echo $key;
    echo "<br>";
    echo $value;

}







?>