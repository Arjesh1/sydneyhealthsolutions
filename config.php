<?php 
//creating connection between front-end and back-end
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'sydneyhealthdb';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

  if(! $conn ){
      die('Could not connect: ' .mysqli_error());
    }
    mysqli_select_db($conn,$dbname);
?>