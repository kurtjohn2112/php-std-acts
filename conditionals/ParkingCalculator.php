<?php
function checkValidity($plate, $vehicle, $inhour, $inmin, $outhour, $outmin){
	if (($inhour < 1 OR $inhour > 24) || ($outhour < 1 || $outhour > 24) || 
		($inmin < 0 || $inmin > 60) || ($outmin < 0 || $outmin > 60) || ($inhour > $outhour)){
		echo "There is INVALID VALUE in the time entered. Please try again.";
	}else{
		//converting all time to minutes
		$totalInMins = ($inhour * 60) + $inmin;
		$totalOutMins = ($outhour * 60) + $outmin;
		$totalMins = $totalOutMins - $totalInMins;

		$hour = ceil($totalMins / 60);

		$amountToBePaid = computeAmountToBePaid($vehicle, $hour);
		displayInfo($plate, $vehicle, $inhour, $inmin, $outhour, $outmin, $amountToBePaid, $hour);
	}
}

function computeAmountToBePaid($vehicle, $hour){
	if ($vehicle == "car"){
		$excessRate = 5.00;
		$amountToBePaid = 30.00;

		if ($hour > 3){
			$amountToBePaid = $amountToBePaid +(($hour - 3) * $excessRate);
		}
	}elseif($vehicle == "motorbike"){
		$excessRate = 5.00;
		$amountToBePaid = 20.00;

		if ($hour > 2){
			$amountToBePaid = $amountToBePaid +(($hour - 2) * $excessRate);
		}

	}elseif($vehicle == "bike"){
		$amountToBePaid = 20.00;

	}elseif($vehicle == "truck"){
		$excessRate = 10.00;
		$amountToBePaid = 40.00;

		if ($hour > 3){
			$amountToBePaid = $amountToBePaid +(($hour - 3) * $excessRate);
		}
	}

	return $amountToBePaid;
}

function displayInfo($plate, $vehicle, $inhour, $inmin, $outhour, $outmin, $amountToBePaid, $hour){
	echo "PLATE NO: ".$plate. "<br />";
	echo "VEHICLE: ".$vehicle. "<br />";
	echo "TIME IN : ".$inhour. ": " .$inmin. "<br />";
	echo "TIME OUT: ".$outhour. ": " .$outmin. "<br />";
	echo "TOTAL HOURS: ".$hour. "<br />";
	echo "AMOUNT TO BE PAID: " .number_format($amountToBePaid, 2);
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		Plate Number <input type="text" name="plate"><br />
		Vehicle Type <br />
			<input type="radio" name="vehicle" value="car">Car <br />
			<input type="radio" name="vehicle" value="motorbike">Motorbike <br />
			<input type="radio" name="vehicle" value="bike">Bike <br />
			<input type="radio" name="vehicle" value="truck">Truck <br />
		Time In <input type="text" name="inhour"> <input type="text" name="inmin"><br />
		Time Out <input type="text" name="outhour"> <input type="text" name="outmin"><br />
		<input type="reset" name="reset" value="Reset">
		<input type="submit" name="calculate" value="Calculate">
	</form>
</body>
</html>

<?php
	if (isset($_POST["calculate"])){
		
			$plate = $_POST["plate"];
			$vehicle = $_POST["vehicle"];
			$inhour = $_POST["inhour"];
			$inmin = $_POST["inmin"];
			$outhour = $_POST["outhour"];
			$outmin = $_POST["outmin"];

			checkValidity($plate, $vehicle, $inhour, $inmin, $outhour, $outmin);
	

		
	}
?>