<?php 
  $conn = mysqli_connect("localhost","root","","my_activityplanner");

  if(!$conn){
      die("Connection error: " . mysqli_connect_error());	
  }
?>