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
							$uid = $_SESSION['user_idnum'];
							//Connect
							$con=mysqli_connect("localhost:3306","root","","games");
							// Check connection
							if (mysqli_connect_errno())
							  {
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							  }

							//Select Data
							$result = mysqli_query($con,"SELECT * FROM gameHistory WHERE user_idnum = '$uid'" );
							//Check that it returns true
							if($result==false){
							  echo "Master Wayne, I've failed you";
							}

							if(!(mysqli_fetch_array($result))){
							    echo "Error Opening user Stats!";
							}
							$num = 1;
							//Print Data by row
							while($row = mysqli_fetch_array($result))
							  {
							    echo $baseball = $row['baseball'];
							    
							  //       $playerlist = $row['playerlist'];        
							        // $list = explode(";", $playerlist);
							        // foreach ($list as $k=>$n){ 
							        //     echo "$n<br>";
							        // }    

							        $num++;
							  }



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
