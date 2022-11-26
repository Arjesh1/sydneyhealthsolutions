<!DOCTYPE html>
<html lang="en">
<style> 

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.appointment {
  width: 100%;
  height: 600px;
  border-radius: 0%;

}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  padding-left: 10px;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

/* Style the container */
.container {
  background-color: #f2f2f2;
  margin-left: 150px;
  margin-right:150px

  
  
}


button {
  height: 50px;
  background: #9A64E0;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;

}
</style>

<script>
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    
</head>
<body>
<?php require_once 'header.php'?>


<div class="imgcontainer">
    <img src="siteimages/appointment1.jpg" alt="appointment" class="appointment">
  </div>
</div>

<center><h2><strong class="black">You have registered sucessfully. Please proceed further for booking.</strong></h2><center>
<center><h1><strong class="black">Book an Appointment</strong></h1><center>

<center>Book an appointment at the stores that suits you. </center></br>
<div class="container">
<form action="reservation.php" method="post">
  <div class="elem-group">
    <input type="text" id="name" name="visitor_name" placeholder="Username" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <input type="email" id="email" name="email" placeholder="E-mail" >
  </div>
  
  <div class="elem-group">
    <select id="test-location" name="test-location" required>
        <option value="">Test Location</option>
        <option value="burwood">Burwood</option>
        <option value="strathfeild">Strathfield</option>
        <option value="homebush">Homebush</option>
        <option value="lidcome">Lidcome</option>
        <option value="auburn">Auburn</option>
    </select>
  </div>
  <div class="elem-group inlined">
    <label for="appointment-date">Appointment Date</label>
    <input type="date" id="appointmentdate" name="appinitmentdate" required>
  </div>
 <div class="elem-group inlined">
    <label for="appointment-time">Appointment Time</label>
    <input type="time" id="appointmenttime" name="appinitmenttime" required>
  </div>
  <div class="elem-group">
    <select id="test-type" name="test-type" required>
        <option value="">Test Type</option>
        <option value="cbc">CBC</option>
        <option value="        <option value="adjoining">blood-glucose</option>
">Blood Glucose</option>
        <option value="kft">KFT</option>
      <option value="lft">LFT</option>
      <option value="covid19">COVID19</option>
      <option value="hemoglobin">Hemoglobin</option>
      <option value="wbc">WBC</option>
    </select>
  </div>
  
  <div class="elem-group">
    <select id="test-location" name="test-location" required>
        <option value="">Home Collection/Test In Store</option>
        <option value="home-collection">Home Collection</option>
        <option value="store">Test In Store</option>
    </select>
  </div>
   <div class="elem-group">
    <input type="text" id="address" name="address" placeholder="Address" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <button type="submit">Book This Date</button>
</form>
</div>
  
<?php require_once 'footer.php'?>
</body>
</html>

