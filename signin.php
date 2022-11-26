<!DOCTYPE html>
<html>

<?php
 

session_start();

if(isset($_POST["txtUser"]) && isset($_POST["txtPwd"])){
	
require_once("config.php");

$username=$_POST["txtUser"];
$pwd=$_POST["txtPwd"];


$hpwd=md5($pwd);

$sql = "SELECT * FROM customer where uname='$fname' and psw='$psw'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$_SESSION['username']=$username;
	
	
	header('Location: afterreg.php');
}else{
	echo "The user name and password are not matching";
}
	
}

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:  #9A64E0;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #9A64E0;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 100%;
  border-radius: 0%;
}

.container {
  padding: 16px;
  background-color: #f2f2f2;
  margin-left: 150px;
  margin-right:150px
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<link rel="stylesheet" href="styles.css">
<title>Sign In</title>
</head>
<body>
<?php require_once 'header.php'?>


<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="siteimages/signin.png" alt="Avatar" class="avatar">
  </div>
<center>Please fill out all the information correctly.</center>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit"><a href="dashboard.php">Login</a></button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="register.php">Create an account?</a></button>
    <span class="psw"> <a href="register.php">Forgot password?</a></span>
  </div>
</form>
<?php require_once 'footer.php'?>
</body>
</html>
