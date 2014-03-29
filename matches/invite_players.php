<?php
//Connect
session_start();
$uid = $_SESSION['username'];
$usernames=$_POST['usernames'];
$link = $_POST['matchlink'];
if($usernames==NULL){
    header( 'Location: ../'.$link);//If no data, just return to page. Why wont parsley work?
}
if($uid == $usernames){
	echo "<script>alert('Cant invite yourself, inviting other players');</script>";
    //header( 'Location: ../'.$link);//If no data, just return to page. Why wont parsley work?
}
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Select Data
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$usernames'" );


while($row = mysqli_fetch_array($result)){
	echo $row['email'];
}


mysqli_close($con);
?>