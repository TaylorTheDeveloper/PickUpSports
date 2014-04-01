<?php
/*
Author: Taylor Brockhoeft
Date Created: 3-26-13
Edit Date: 3-29-13
Description: 
			This Module of PickUp is designed to handle allowing 
	one user to invite other players. If the user is logged in and 
	attempts to invite themselves, the code will ignore their name 
	and continue inviteing all the players it can find in the database.
	If the feild is blank, and they try to submit the form, they will 
	simply stay on the current page. Valid input, following these rules, 
	should simply be usernames, followed buy a comma so we can tell which is which.
	Inapproptiate data is handled.

*/
//Connect
	require_once "Mail.php";
session_start();
$uid = $_SESSION['username'];
$usernames=$_POST['usernames'];

echo $usernames . "<br>";
$arryusernames = explode(",", $usernames);
print_r($arryusernames);

foreach ($arryusernames as $key => &$value) {//Convert username to lowercase
	$value = strtolower($value);
	if($uid == $value){//If the user enters their own name, we'll spit out an alert
	echo "<script>alert('Cant invite yourself, inviting other players');</script>";
	}
}
unset($value);

$link = substr($_POST['matchlink'],23,50);//Split link val

if($usernames==NULL){	
    header( 'Location: ../'.$link);//If no data, just return to page. 
}

$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

foreach ($arryusernames as $key => $value) {//Query the database and find each valid user to contact for this game.
//Select Data
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$value'" );

if($row = mysqli_fetch_array($result)){
	$content = "";//email message content goes here
	if($uid == $value){//If the user enters their own name, we'll spit out an alert
	echo "<script>alert('Cant invite yourself, inviting other players');</script>";
	}
	else{
	echo "<br>" . $row['email'];//<-- Here is where we get their email and send them an email with the link
	$to = $row['email'];
	 $subject = "PickUpSports";
	 $body = $content;
	 if (mail($to, $subject, $body)) {
	   echo("<p>Email successfully sent!</p>");
	  } else {
	   echo("<p>Email delivery failed…</p>");
	  }
	}
}
else{
	//Do nothing with names that can't be added, maybe spit out error?
}
    
}

mysqli_close($con);
?>