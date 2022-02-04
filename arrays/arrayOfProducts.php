<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
	<form method="post" action="" class="mt-5">
		No. of products to buy
		<input type="text" name="len">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
	$arrLen = $_POST["len"];

	echo "<br><hr>";
	echo "<form method='post' action='' class='container'>";
	for ($i = 0; $i < $arrLen; $i++) {
		echo "Quantity <input type='text' name='quantity[]'>";
		echo " Price <input type='text' name='price[]'><br>";
	}
	// echo "<input type='hidden' name='len' value='$arrLen'><br>";
	echo "<input type='submit' name='compute' value='Compute'>";
	echo "</form>";
}

if (isset($_POST["compute"])) {
	$quantity = $_POST["quantity"];
	$lengthOfArray = count($quantity);
	$price = $_POST["price"];
	$sum = 0;

	echo "<table class='table table-striped w-75 text-center container mt-5'>";
	echo "<th class='w-25'> QUANTITY </th>";
	echo "<th class='w-25'> PRICE </th>";
	echo "<th class='w-25'> AMOUNT </th>";

	for ($i = 0; $i < $lengthOfArray; $i++) {

		// $sum +=  ($quantity[$i] * $price[$i]);
		$sum = $sum + ($quantity[$i] * $price[$i]);



		echo "<tr>";
		echo "<td> $quantity[$i] </td>";
		echo "<td> " . $price[$i] . "</td>";
		echo "<td> " . $quantity[$i] * $price[$i] . "</td>";
		echo "</tr>";
	}
	echo "<tr>";
	echo "<td>The Amount to be paid is: </td>";
	echo "<td></td>";
	echo "<td>".$sum."</td>";
	echo "</tr>";

	echo "</table>";
	// echo "<div class='float-right mr-5 text-danger'>Total amount to be Paid <b> " .  . " </b> </div>";
}
?>