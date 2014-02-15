<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>PickUp</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

		<header>

			<div id="brand" class="title">PickUp.</div>
			<button type="submit" class="user_log_in">LOGIN</button>

			<div id="hero" class="title">
				<p>
					Your friendly neighboorhood pickup game. 
				</p>

				<p>
					Re-imagined.
				</p>

			</div>
		</header>


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
