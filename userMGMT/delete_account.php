<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="games"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
session_start();
$username = $_SESSION['username'];

$sql = "SELECT * FROM $tbl_name WHERE username='$username'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// Checks if there are any other records with that username
if($count){
	echo "Account Deleted Successfully";
}
else
{
	echo '0';
	//header( 'Location: ../404.php?info=The System Couldnt Log You On');
}
?>