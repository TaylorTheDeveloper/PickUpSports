<?php 

session_start();
$uid = $_SESSION['user_idnum'];

	$p_date = $_POST['date'];
	$phpdate = strtotime( $p_date );
	$mysqldate = date( 'Y-m-d H:i:s', $phpdate );
	$p_date = substr($mysqldate,0,10);

	$p_pubPriv = 0;
	if($_POST["pubPriv"]=="public"){
		$p_pubPriv =1;
	}

	//Connect
	$con=mysqli_connect("localhost:3306","root","","games");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	 $sql="INSERT INTO matches (`match_id`, `admin_user_id`, 
	 	`match_type`, `match_location`, 
	 	`match_zip`, `match_date`, 
	 	`match_time`, `match_maxplayers`, 
	 	`match_currentplayers`, `matchp_pubpriv`) 
		VALUES ( 0, '$uid' , 
			'$_POST[sports]', '$_POST[location]', 
		 	'$_POST[zip]', '$p_date', 
		 	'$_POST[time]','$_POST[maxPlayers]', 
		 	1, '$p_pubPriv')"; //Only one player, Match id is auto gen, user id can wait
	// Test code : //$ssqqll="INSERT INTO `matches`(`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES (0,0,0,0,0,0,0,0,0,0)";
	
	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	mysqli_close($con);
?>

<?php //get matchID
$con=mysqli_connect("localhost:3306","root","","games");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$uid = $_SESSION['user_idnum'];
	//if not value, 404
 	$players = mysqli_query($con,"SELECT * FROM matches WHERE admin_user_id = '$uid'" );
    while($row = mysqli_fetch_array($players))  {
        $matchID = $row['match_id'];
    }
mysqli_close($con);
?>
<?php //Set Values in matchplayertable :)
$con=mysqli_connect("localhost:3306","root","","games");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
//Insert Admin player onto match playerlist
$sql = "INSERT INTO matchplayers ( `match_id`, `user_idnum`) VALUES ('$matchID','$uid')";
	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	mysqli_close($con);
	header( 'Location: ../matches.php?id=' . $matchID);
?>
				