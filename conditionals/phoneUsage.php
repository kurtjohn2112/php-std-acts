<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<form method="post" action="">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">Account #</div>
				<div class="col-md-3"><input type="text" name="account" class="form-control"></div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">Account Type </div>
				<div class="col-md-3">
					<select name="type" id="" class="form-control">
						<option value="Premium">Premium</option>
						<option value="Regular">Regular</option>
					</select>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">Day Use</div>
				<div class="col-md-3 pl-5">
					Start <input type="number" name="sDHr"  class=" w-25">
							<input type="number" name="sDMin" class="w-25"><br>
					End <input type="number" name="eDHr"  class="w-25">
							<input type="number" name="eDMin" class="w-25"><br>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">Night Use</div>
				<div class="col-md-3 pl-5">
					Start <input type="number" name="sNHr" class=" w-25">
							<input type="number" name="sNMin" class=" w-25"><br>
					End <input type="number" name="eNHr" class=" w-25">
							<input type="number" name="eNMin" class=" w-25"><br>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<input type="reset" name="reset" value="Reset" class="btn btn-warning mt-3">
					<input type="submit" name="calculate" value="Calculate" class="btn btn-success mt-3">
				</div>
				<div class="col-md-3"></div>
			</div>
			
		</form>
	</div>
</body>
</html>

<?php
	if (isset($_POST["calculate"])){

		function getInputs(){
			$account = $_POST["account"];
			$type = $_POST["type"];

			$sDHr = $_POST["sDHr"];
			$sDMin = $_POST["sDMin"];
			$eDHr = $_POST["eDHr"];
			$eDMin = $_POST["eDMin"];

			$sNHr = $_POST["sNHr"];
			$sNMin = $_POST["sNMin"];
			$eNHr = $_POST["eNHr"];
			$eNMin = $_POST["eNMin"];
			
			checkInputs($account, $type, $sDHr, $sDMin, $eDHr, $eDMin, $sNHr, $sNMin, $eNHr, $eNMin);
		}

		function checkInputs($account, $type, $sDHr, $sDMin, $eDHr, $eDMin, $sNHr, $sNMin, $eNHr, $eNMin){

			if(!empty($sDHr) && !empty($sDMin) && !empty($eDHr) && !empty($eDMin) &&
				empty($sNHr) && empty($sNMin) && empty($eNHr) && empty($eNMin) &&
				$sDHr >= 1 && $sDHr <= 17 && $eDHr >= 1 && $eDHr <= 17 && 
				$sDMin >= 1 && $sDMin <= 60 && $eDMin >= 1 && $eDMin <= 60 && $sDHr < $eDHr){

				computeDayUseOnly($account, $type, $sDHr, $sDMin, $eDHr, $eDMin);

			}else if(!empty($sNHr) && !empty($sNMin) && !empty($eNHr) && !empty($eNMin) &&
				empty($sDHr) && empty($sDMin) && empty($eDHr) && empty($eDMin) &&
				$sNHr >= 18 && $sNHr <= 24 && $eNHr >= 18 && $eNHr <= 24 && 
				$sNMin >= 1 && $sNMin <= 60 && $eNMin >= 1 && $eNMin <= 60 && $sNHr < $eNHr){
				computeNightUseOnly($account, $type,$sNHr, $sNMin, $eNHr, $eNMin);

			}else if (($sDHr < 1 || $sDHr > 17) || ($eDHr < 1 || $eDHr > 17) ||($sNHr < 18 || $sNHr > 24) ||($eNHr < 18 || $eNHr > 24) ||
				($sDMin < 1 || $sDMin > 60) || ($eDMin < 1 || $eDMin > 60) ||($sNMin < 1 || $sNMin > 60) ||($eNMin < 1 || $eNMin > 60) ||
				($sDHr > $eDHr) || ($sNHr > $eNHr)){
				echo "INVALID VALUE IN TIME INPUT. Pls check again.";

			}else{
				convertTime($account, $type, $sDHr, $sDMin, $eDHr, $eDMin, $sNHr, $sNMin, $eNHr, $eNMin);
			}
		}

		function computeDayUseOnly($account, $type, $sDHr, $sDMin, $eDHr, $eDMin){
			$totalDayUse = (($eDHr * 60) + $eDMin)  - (($sDHr * 60) + $sDMin) ;
			$totalNightUse = 0;

			computeBill($account, $type, $totalDayUse, $totalNightUse);
		}

		function computeNightUseOnly($account, $type,$sNHr, $sNMin, $eNHr, $eNMin){
			$totalDayUse = 0;
			$totalNightUse = (($eNHr * 60) + $eNMin)  - (($sNHr * 60) + $sNMin);

			computeBill($account, $type, $totalDayUse, $totalNightUse);
		}

		function convertTime($account, $type, $sDHr, $sDMin, $eDHr, $eDMin, $sNHr, $sNMin, $eNHr, $eNMin){
			$totalDayUse = (($eDHr * 60) + $eDMin)  - (($sDHr * 60) + $sDMin) ;
			$totalNightUse = (($eNHr * 60) + $eNMin)  - (($sNHr * 60) + $sNMin);

			computeBill($account, $type, $totalDayUse, $totalNightUse);
		}

		function computeBill($account, $type, $totalDayUse, $totalNightUse){
			if ($type == "Premium"){
				$dayUseDue = $totalDayUse * 0.75;
				$nightUseDue = $totalNightUse * 0.50;
			}elseif($type == "Regular"){
				$dayUseDue = $totalDayUse * 0.90;
				$nightUseDue = $totalNightUse * 0.65;
			}

			$totalBill = $dayUseDue + $nightUseDue;
			displayBill($account, $type, $totalBill);
		}

		function displayBill($account, $type, $totalBill){

			echo "<div class='container bg-success w-50 mx-auto p-5 mt-5'>";
				echo "ACCOUNT NUMBER: <span class='text-white'>" .$account. "</span><br>";
				echo "ACCOUNT TYPE: <span class='text-white'>" .$type. "</span><br>";
				echo "TOTAL BILL: <span class='text-white'>" .number_format($totalBill,2). "</span><br>";
			echo "</div>";
		}

		getInputs();
	}
	
?>