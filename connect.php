<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pLocation = $_POST['pLocation'];
	$dLocation = $_POST['dLocation'];
	$days = $_POST['days'];

	// Database connection
	$conn = new mysqli('localhost','root','','added');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into rent(name, email, pLocation, dLocation, days) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $name, $email, $pLocation, $dLocation, $days);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
        header('location:payscript.php');
		$stmt->close();
		$conn->close();
	}
?>