<?php 
session_start();
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
    //header( 'Location: ../userpage.php');
 //     if($_SESSION['newgame'] == true){
 //        $_SESSION['newgame'] = false;//reset
 //   	header( 'Location: ../newgame.php');
 //    }
 //    else{
 //    header( 'Location: ../userpage.php');
	// }
?>

