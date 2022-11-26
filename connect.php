<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$emailaddress = $_POST['emailaddress'];
    $address = $_POST['address'];
	$medicare = $_POST['medicare'];
    $phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$psw = $_POST['psw'];
    // Database connection
	$conn = new mysqli('localhost','root','','sydneyhealthdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into customer(fname, lname, dob, emailaddress, address, medicare, phone, gender, psw) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiiss", $fname, $lname, $dob, $emailaddress, $address, $medicare, $phone, $gender, $psw);
		$stmt->execute();
		echo require_once 'afterreg.php';
		$stmt->close();
		$conn->close();
	}
?>
	
