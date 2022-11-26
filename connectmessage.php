<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    // Database connection
	$conn = new mysqli('localhost','root','','sydneyhealthdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into message(fname, lname, email, country, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fname, $lname, $email, $country, $message);
		$stmt->execute();
		echo require_once 'thanksforcontacting.php';
		$stmt->close();
		$conn->close();
	}
?>