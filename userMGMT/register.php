<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'games');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



$username = $_POST['username'];
$password =  $_POST['password'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$favSport = $_POST['sportsValue'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];


//$query = "INSERT INTO users (username,password,zip,first_name,last_name,email) VALUES ('$userName','$password', '$zip', '$fname', '$lname', '$email')";
$query = "INSERT INTO users ( first_name, last_name, email, username, zip, favSport, password) VALUES ('$first','$last', '$email', '$username', 
	'$zip', '$favSport' , '$password')";
//$query = "INSERT INTO `gamehistory`(`username`, `user_idnum`, `gamesPlayed`, `baseball`, `soccer`, `football`, `tennis`, `frisbee`, `rugby`, `basketball`, `hockey`) VALUES ($username,111,0,0,0,0,0,0,0,0,0)";
//$query = "INSERT INTO users (`user_idnum`, `first_name`, `last_name`, `email`, `username`, `zip`, `password`, `favSport`) VALUES (0,'$first','$last', '$email', '$username','$zip', '$favSport' '$password') ";
$data = mysql_query ($query)or die(mysql_error());
if($data)
{
	session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    if($_SESSION['newgame'] == true){
   	header( 'Location: ../newgame.php');
    }
    else{
    header( 'Location: ../userpage.php');
	}
exit;
}
else
{
echo "Unknown Error, Account could not be generated!";
}
?>