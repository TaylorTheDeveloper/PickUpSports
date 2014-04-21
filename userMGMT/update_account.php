<?php 
session_start();
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$uname = $_SESSION['username'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$fsport = $_POST['sports'];
//updategame history

$sql = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email', zip='$zip', favSport='$fsport' WHERE username='$uname'";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

 mysqli_close($con);

  header( 'Location: ../userpage.php' );
?>
