<!DOCTYPE html>
<html lang="en">

<?php 
$con=mysqli_connect("localhost:3306","root","","games");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

$this_match_id = $_GET['id'];

$matchExist = mysqli_query($con,"SELECT * FROM matches WHERE match_id = '$this_match_id'" );

while($row = mysqli_fetch_array($matchExist))  {
   $matchType = $row['match_type'];
   $matchID = $row['match_id'];
   $adminID = $row['admin_user_id'];
   $matchLocation = $row['match_type'];
   $matchZip = $row['match_zip'];
   $matchDate = $row['match_date'];
   $matchTime = $row['match_time'];
   $maxPlayers = $row['match_maxplayers'];
   $currPlayers = $row['match_currentplayers'];
   $pubPrib = $row['matchp_pubpriv'];
}



if($_GET['id']==NULL){
	header( 'Location: index.php');
}
else if($_GET['id'] == $matchID){
	$_SESSION['mid'] = $_GET['id'];
}
else{
	header( 'Location: 404.php');
}

//mysqli_close($con);
?>

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container">

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<h1><?php echo $matchType; ?></h1>
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php 
 $this_match_id = $matchID;
 $players = mysqli_query($con,"SELECT * FROM matchPlayers JOIN users ON users.user_idnum=matchplayers.user_idnum WHERE match_id = '$this_match_id'" );

    while($row = mysqli_fetch_array($players))  {
        echo $row['username'] . "<br>";
    }
		?>
		</div>
	</div>
</div>
<?php mysqli_close($con);?>


<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
