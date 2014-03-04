<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'games');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



$userName = $_POST['username'];
$password =  $_POST['password'];
$zip = $_POST['zip'];
$email = $_POST['email'];
//$fname = $_POST['firstname'];
//$lname = $_POST['lastname'];

//$query = "INSERT INTO users (username,password,zip,first_name,last_name,email) VALUES ('$userName','$password', '$zip', '$fname', '$lname', '$email')";
$query = "INSERT INTO users (username,password,zip,email) VALUES ('$userName','$password', '$zip', '$email')";
$data = mysql_query ($query)or die(mysql_error());
if($data)
{
/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'userpage.php';
header("Location: ../userpage.php");
exit;
}
else
{
echo "Unknown Error, Account could not be generated!";
}
?>