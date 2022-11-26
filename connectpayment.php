<?php
	$fullname = $_POST['fullname'];
	$emailadd = $_POST['emailadd'];
	$add = $_POST['add'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $cardname = $_POST['cardname'];
	$cardnumber = $_POST['cardnumber'];
	$expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    // Database connection
	$conn = new mysqli('localhost','root','','sydneyhealthdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into payment(fullname, emailadd, add, city,	state, postcode, cardname, cardnumber, expmonth, expyear, cvv) values(?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssisisis", $fullname, $emailadd, $add, $city, $state, $postcode, $cardname, $cardnumber, $expmonth, $expyear, $cvv);
		$stmt->execute();
		echo require_once 'paymentconfirmation.php';
		$stmt->close();
		$conn->close();
	}
?>