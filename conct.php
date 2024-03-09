<?php
	$vmodel = $_POST['vmodel'];
	$vnumber = $_POST['vnumber'];
	$seating = $_POST['seating'];
	$rent = $_POST['rent'];
	$cartype = $_POST['carType'];

	// Database connection
	$conn = new mysqli('localhost','root','','added');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into added(vmodel, vnumber, seating, rent, cartype) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $vmodel, $vnumber, $seating, $rent, $cartype);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
        header('location:addedSucc.html');
		$stmt->close();
		$conn->close();
	}
?>