<?php
//Connect
session_start();
$uid = $_SESSION['username'];
$usernames=$_POST['usernames'];

echo $usernames . "<br>";
$arryusernames = explode(",", $usernames);
print_r($arryusernames);

foreach ($arryusernames as $key => &$value) {
	$value = strtolower($value);
	if($uid == $value){
	echo "<script>alert('Cant invite yourself, inviting other players');</script>";
    //header( 'Location: ../'.$link);//If no data, just return to page. Why wont parsley work?
	}
}
unset($value);


$link = substr($_POST['matchlink'],23,50);//Split link val

if($usernames==NULL){	
    header( 'Location: ../'.$link);//If no data, just return to page. Why wont parsley work?
}

$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

foreach ($arryusernames as $key => $value) {
//Select Data
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$value'" );

if($row = mysqli_fetch_array($result)){
	if($uid == $value){
	echo "<script>alert('Cant invite yourself, inviting other players');</script>";
    //header( 'Location: ../'.$link);//If no data, just return to page. Why wont parsley work?
	}
	else{
	echo "<br>" . $row['email'];//<-- Here is where we get their email and send them an email with the link
	}
}
else{
	//Do nothing with names that can't be added, maybe spit out error?
}
    
}

mysqli_close($con);
?>