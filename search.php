<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.html' ?>

<br><br><br><!-- change out for margin -->

<div class="container">
 <font color="FA7147">

   <h1> 
Here are the results near <?php echo $_POST["zip_location"]; ?> <br> <hr>
    <h2>


<?php //Query Database
 
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
$num = 1;
//Print Data by row
while($row = mysqli_fetch_array($result))
  {
  echo "<div class=\"container\" >";
  echo "<div class=\"row clearfix\">";
  echo "<div class=\"pull-left\"><img class=\"img-circle img-responsive text-center\" src=\"http://lorempixel.com/100/100/sports/" . $num ."\"></div>";
  echo "<div style=\"padding-left=50px\">" . $row['match_type'] . " " . $row['match_location'] . "</div>" ;
  echo "<div class=\"pull-right\"><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"regmodal\" data-target=\"#regModal\">Join Game</button></div>";
  echo "<br><br><hr>";
  echo "</div>";
  echo "</div>";
  $num = $num + 1;
  if($num==10){
    $num=1;
  }
  }

mysqli_close($con);
?>
<!-- end PHP -->
</font>
<?php include 'footer.html' ?>

</div><!-- /.container -->

 

  
</body>
</html>
