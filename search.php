<?php include 'head.php'; ?> <!-- links and stuff, located in head.php. only base files should go in here -->

<?php include 'header.php'; ?> <!-- Header stuff, located in head.php. only base files should go in here -->

<body>
	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
	<h1>	
Here are the results near <?php echo $_POST["zip_location"]; ?> <br> <hr>
	<h2>

<?php //Print Database
 
$range = 50; //Range to search zip
$zip_top = intval($_POST["zip_location"]) + $range;
$zip_bottom = intval($_POST["zip_location"]) - $range;
//Connect
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Select Data
$result = mysqli_query($con,"SELECT * FROM matches WHERE match_zip >  '$zip_bottom' AND match_zip < '$zip_top'" );
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}

if(!(mysqli_fetch_array($result))){
	echo "Sorry, we can't seem to find any games between " . $zip_top . " and " . $zip_bottom;
}

//Print Data by row
while($row = mysqli_fetch_array($result))
  {

  echo $row['match_type'] . " " . $row['match_location'];
  echo "<br>";
  }

mysqli_close($con);
?>


	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>
