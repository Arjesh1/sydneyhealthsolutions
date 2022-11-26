
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], .dropdown, .dropdown2, .dropdown3 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: #9A64E0;
}


button {
  height: 50px;
  width:100px;
  background: #9A64E0;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}


buttons:hover {
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

/* Change styles for span and cancel buttons on extra small screens */
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
<title>Sign Up</title>
</head>
<body>
<?php require_once 'header.php'?>


<form action="connect.php" method="post">
  <div class="imgcontainer">
    <img src="siteimages/signup.png" alt="Avatar" class="avatar">
  </div>
<center>Please fill out all the information correctly.</center>
  <div class="container">
    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="lname" required>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="fname" required>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="text" placeholder="Enter your date of birth" name="dob" required>

    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter your email address" name="email" required>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your home address" name="address" required>
    <label for="medicare"><b>Medicare Number</b></label>
    <input type="text" placeholder="Enter your medicare number" name="medicare" required>
    <label for="phone"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter your mobile number" name="phone" required>
    <label for="gender"><b>Gender</b></label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="male"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="female"
                      id="female"
                    />Female</label>
                <br>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    

    <button type="submit"><a href="afterreg.php">Submit</a></button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="signin.php">Already have an account?</a></button>
    
  </div>
</form>
</div>
<?php require_once 'footer.php'?>
</body>
</html>
