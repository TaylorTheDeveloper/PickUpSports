<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="games"; // Database name 
$tbl_name="users"; // Table name 

session_start();
$username=$_SESSION['username'];

$uid=$_SESSION['user_idnum'];

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("games", $con);

// sending query

mysql_query("DELETE FROM matchplayers WHERE user_idnum='$uid'") or die(mysql_error());  
mysql_query("DELETE FROM matches WHERE admin_user_id='$uid'") or die(mysql_error());  
mysql_query("DELETE FROM gamehistory WHERE username='$username'") or die(mysql_error());  
mysql_query("DELETE FROM users WHERE username='$username'") or die(mysql_error()); 
session_destroy();

 mysqli_close($con);

 session_start();
$_SESSION['deleteMessage'] = true;

 header( 'Location: ../index.php');
?>