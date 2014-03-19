<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>


<br><br><br><!-- change out for margin -->
<div class="container">
	<br><br>
	<div class="row clearfix media well">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column text-center">
					<img alt="140x140" src="http://placehold.it/140x140&text=profilepic" class="img-circle" />
					<h2><?php echo $_SESSION['username']; ?></h2>
				</div>
				<div class="col-md-2 column">
					<h2> Stats: </h2><hr>
					 <address> <strong>Games Played: 12 </strong><br /> Favorite Sport: Baseball<br /> Florida<br /> <abbr title="zip">zip:</abbr> 32304 </address>
				</div>
				<div class="col-md-8 column">
					<div class="media well">
						 <?php //Query Database
						 //Handle Sports Value
						 function random_color_part() {
						    return str_pad( dechex( mt_rand( 150, 255 ) ), 3, '0', STR_PAD_LEFT);
						}

						function random_color() {
						    return random_color_part();
						    /* return random_color_part() . random_color_part() . random_color_part()*/
						}
						 function handleSports($Sval,$name,$max){
						 	$percent = ($Sval/$max) * 100;
							if($Sval > 0){
								echo "<div style=\"margin: 1%; width: 99%; border: 1px solid #07ad79;\">
								<div style=\"color: #ffffff; padding: 5px; width:" . $percent . "%; background: #" . random_color() . ";\">" . $name . " " . $Sval . "</div>
								</div>";
								}
							}

							$uid = $_SESSION['username'];
							//Connect
							$con=mysqli_connect("localhost:3306","root","","games");
							// Check connection
							if (mysqli_connect_errno())
							{
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

							//Select Data
							$result = mysqli_query($con,"SELECT * FROM gameHistory WHERE username = '$uid'" );
							//Check that it returns true
							if($result==false){
							  echo "Master Wayne, I've failed you";
							}

							// if(!(mysqli_fetch_array($result))){
							//     echo "Error Opening user Stats!";
							// }
							
							while($row = mysqli_fetch_array($result))
							  {
							  	$baseball = $row['baseball'];
							    $basketball = $row['basketball'];
							    $football = $row['football'];
							    $soccer = $row['soccer'];
							    $hockey = $row['hockey'];
							    $tennis = $row['tennis'];
							    $frisbee = $row['frisbee'];							 
							  }
							  $highVal = max($baseball, $basketball, $football, $soccer, $hockey, $tennis, $frisbee);

							  handleSports($baseball, "Baseball", $highVal);
							  handleSports($basketball,"Basketball", $highVal);
							  handleSports($football,"Football", $highVal);
							  handleSports($soccer,"Soccer", $highVal);
							  handleSports($hockey,"Hockey", $highVal);
							  handleSports($tennis,"Tennis", $highVal);
							  handleSports($frisbee,"Frisbee", $highVal);



							mysqli_close($con);
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
<?php include 'game_forms.html' ?>


<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
