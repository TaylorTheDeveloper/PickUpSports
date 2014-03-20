<!DOCTYPE html>
<html lang="en">

<?php 
if($_GET['id']==NULL){
	header( 'Location: index.php');
}
else if($_GET['id'] == 'abc'){
	$_SESSION['mid'] = $_GET['id'];
}
else{
	header( 'Location: 404.php');
}
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
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php 
		// $con=mysqli_connect("localhost:3306","root","","games");
		// // Check connection
		// if (mysqli_connect_errno())
		//   {
		//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
		//   }

		// //Select Data
		// $result = mysqli_query($con,"SELECT * FROM matches WHERE match_zip >  '$zip_bottom' AND match_zip < '$zip_top'" );
		// //Check that it returns true
		// if($result==false){
		//   echo "Master Wayne, I've failed you";
		// }

		// if(!(mysqli_fetch_array($result))){
		//     echo "Sorry, we can't seem to find any games between " . $zip_top . " and " . $zip_bottom;
		// }

		// $playerlist = $row['playerlist'];        
		// $list = explode(";", $playerlist);
		// foreach ($list as $k=>$n){ 
		//     echo "$n<br>";
		// }	
		// mysqli_close($con);
		?>
		</div>
	</div>
</div>



<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
