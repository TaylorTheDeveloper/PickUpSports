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
?>
<?php //Updates Game History Database
$con=mysqli_connect("localhost:3306","root","","games");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
$uname = $_SESSION['username'];
$uid = $_SESSION['user_idnum'];
 
    $query = "INSERT INTO gamehistory (`gamesPlayed`, `user_idnum`, `username`, `baseball`, `soccer`, `football`, `tennis`, `frisbee`, `rugby`, `basketball`, `hockey`) VALUES (0,'$uid', '$uname', 0,0,0,0,0,0,0,0)";
    if (!mysqli_query($con,$query))
      {
      die('Error: ' . mysqli_error($con));
      }
      
    header( 'Location: ../userpage.php');


 mysqli_close($con);
?>