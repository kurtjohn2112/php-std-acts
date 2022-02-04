<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Usage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container w-50 mx-auto mt-5">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2>Account Number</h2>
                </div>
                <div class="col-md-6">
                    <input type="text" name="accountNumber" id="inputAccountNumber" class="form-control border border-primary" placeholder="" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2>Account Type</h2>
                </div>
                <div class="col-md-6">
                    <select name="accountType" id="accountTypeDropdown" class="form-control border border-primary">
                        <option value="Regular">Regular</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2>Daily Use</h2>
                </div>
                <div class="col-md-3">
                    <input type="number" name="dayStartHr" id="inputDayStartHour" class="form-control text-warning border border-warning" placeholder="Start Hour" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="dayStartMin" id="inputDayStartMinutes" class="form-control text-warning border border-warning" placeholder="Start Minute" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <input type="number" name="dayEndHr" id="inputDayEndHour" class="form-control text-warning border border-warning" placeholder="End Hour" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="dayEndMin" id="inputDayEndMinutes" class="form-control text-warning border border-warning" placeholder="End Minute" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2>Nightly Use</h2>
                </div>
                <div class="col-md-3">
                    <input type="number" name="nightStartHr" id="inputNightStartHour" class="form-control text-white bg-dark" placeholder="Start Hour">
                </div>
                <div class="col-md-3">
                    <input type="number" name="nightStartMin" id="inputNightStartMinutes" class="form-control text-white bg-dark" placeholder="Start Minute">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <input type="number" name="nightEndHr" id="inputNightEndHour" class="form-control text-white bg-dark" placeholder="End Hour">
                </div>
                <div class="col-md-3">
                    <input type="number" name="nightEndMin" id="inputNightEndMinutes" class="form-control text-white bg-dark" placeholder="End Minute">
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-md-2">
                    <!-- <a href="phone.php" name="reset" class="d-block mx-auto text-white btn btn-danger" role="button">Reset</a> -->
                    <button type="reset" name="reset" class="d-block mx-auto text-white btn btn-danger">Reset</button>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="calculate" class="d-block mx-auto text-white btn btn-success">Calculate</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php

    if (isset($_POST["calculate"])){

        function getInputs(){
            $day_start_hour = $_POST['dayStartHr'];
            $day_start_min = $_POST['dayStartMin'];
            $day_end_hour = $_POST['dayEndHr'];
            $day_end_min = $_POST['dayEndMin'];
            $night_start_hour = $_POST['nightStartHr'];
            $night_start_min = $_POST['nightStartMin'];
            $night_end_hour = $_POST['nightEndHr'];
            $night_end_min = $_POST['nightEndMin'];

            checkInputs($day_start_hour, $day_start_min, $day_end_hour, $day_end_min, $night_start_hour, $night_start_min, $night_end_hour, $night_end_min);
        }

        function checkInputs($day_start_hour, $day_start_min, $day_end_hour, $day_end_min, $night_start_hour, $night_start_min, $night_end_hour, $night_end_min){
            if(($day_start_hour >= 0 && $day_start_hour <= 17) && 
            ($day_start_min >= 0 && $day_start_min <= 59) && 
            ($day_end_hour >= 0 && $day_end_hour <= 17) && 
            ($night_start_hour >= 18 && $night_start_hour <= 23) && 
            ($night_start_min >= 0 && $night_start_min <= 59) && 
            ($night_end_hour >= 18 && $night_end_hour <= 23) && 
            ($day_start_hour < $day_end_hour) && 
            ($night_start_hour < $night_end_hour)){
                
                convertTime($day_start_hour, $day_start_min, $day_end_hour, $day_end_min, $night_start_hour, $night_start_min, $night_end_hour, $night_end_min);

            }else{
                echo "Invalid Input";
            }
        }

        function convertTime($day_start_hour, $day_start_min, $day_end_hour, $day_end_min, $night_start_hour, $night_start_min, $night_end_hour, $night_end_min){

            $totalDayUse = (($day_end_hour * 60) + $day_end_min) - (($day_start_hour * 60) + $day_start_min);
            $totalNightUse = (($night_end_hour * 60) + $night_end_min) - (($night_start_hour * 60) + $night_start_min);
            
            computeBill($totalDayUse, $totalNightUse);
        }

        function computeBill($totalDayUse, $totalNightUse){
            $account_number = $_POST['accountNumber'];
            $account_type = $_POST['accountType'];

            if($account_type == "Premium"){
                $dayUseBill = $totalDayUse * 0.75;
                $nightUseBill = $totalNightUse * 0.50;
            }elseif($account_type == "Regular"){
                $dayUseBill = $totalDayUse * 0.90;
                $nightUseBill = $totalNightUse * 0.65;                
            }

            $totalBill = $dayUseBill + $nightUseBill;

            displayBill($account_number, $account_type, $totalDayUse, $totalNightUse, $dayUseBill, $nightUseBill, $totalBill);
        }

        function displayBill($account_number, $account_type, $totalDayUse, $totalNightUse, $dayUseBill, $nightUseBill, $totalBill){
            echo "

            <div class='container w-50 my-5 mx-auto bg-light'>
                <div class='row p-3'>
                    <div class='col-md-12'>
                        <h2>Account Number: $account_number</h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12'>
                        <h2>Account Type: $account_type</h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12 bg-warning'>
                        <h2 class='text-white'>Total Day Use: $totalDayUse minutes</h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12 bg-warning'>
                        <h2 class='text-white'>Total Day Use Price:  Php $dayUseBill</h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12 bg-dark'>
                        <h2 class='text-white'>Total Night Use: $totalNightUse minutes</h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12 bg-dark'>
                        <h2 class='text-white'>Total Night Use Price: Php $nightUseBill </h2>
                    </div>
                </div>
                <div class='row p-3'>
                    <div class='col-md-12'>
                        <h2 class='display-3'>Total Bill: Php <span class='text-danger'>$totalBill</span></h2>
                    </div>
                </div>
            </div>                
            
            ";
        }

        getInputs();
    }

?>