<?php

$conn = mysqli_connect("localhost","root","root","sgsits_club");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
