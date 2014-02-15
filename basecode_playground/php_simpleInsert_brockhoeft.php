<?php
$con=mysqli_connect("localhost:3306","root","classic","namesandcolors");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO usercolor (FirstName, LastName, Color)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[color]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>