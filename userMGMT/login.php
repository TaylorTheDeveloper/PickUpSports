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
$username=$_POST['name']; 
$password=$_POST['pwd']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
	echo '1';
    session_start();
    $_SESSION['loggedin'] = true;    
	$username = strtolower($username);
    $_SESSION['username'] = $username;    
}
else
{
	echo '0';
	//header( 'Location: ../404.php?info=The System Couldnt Log You On');
}

$con=mysqli_connect("localhost:3306","root","","games");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

$uname = $_SESSION['username'];
//if not value, 404
 $players = mysqli_query($con,"SELECT * FROM users WHERE username = '$uname'" );

    while($row = mysqli_fetch_array($players))  {
        $_SESSION['user_idnum'] = $row['user_idnum'] . "<br>";
    }

 mysqli_close($con);


?>