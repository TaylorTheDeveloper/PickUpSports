<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>


<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container">

 <font color="FA7147">

   <h1> 
Here are the results near <?php echo $_POST["zip_location"]; ?> <br> <hr>
    </h1>


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
     echo "<div class=\"col-md-12 column\">";
       echo "<div class=\"row clearfix media well\">";
         echo "<div class=\"col-md-2 column\">";
           echo "<img alt=\"140x140\" class=\"img-circle\"  src=\"img/fsu.jpeg\" />";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h2>Where</h2>";
         echo "<p>" . $row['match_location'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h2>When</h2>";
         echo "<p>" . $row['match_date'] . "</p>";
         echo "<p>" . $row['match_time'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h2>Players</h2>";
         echo "<p> Curr" . $row['match_maxplayers'] . "</p>";
         echo "<p> Max" . $row['match_currentplayers'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h2>Details</h2>";
         echo "<p>" . $row['match_type'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
             echo "<a id=\"modal-627836\" href=\"#modal-container-627836\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"regmodal\" data-target=\"#regModal\">Join Game</button></a>";
         
         //Start Modal
        echo "<div class=\"modal fade\" id=\"modal-container-627836\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
        echo "<div class=\"modal-dialog\">";
        echo "<div class=\"modal-content\">";
        echo "<div class=\"modal-header\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>";
        echo "<h4 class=\"modal-title\" id=\"myModalLabel\"> Modal title </h4>";
        echo " </div>";
        echo "<div class=\"modal-body\">";
        echo "...";
        echo "</div>";
        echo "<div class=\"modal-footer\">";
        echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button> <button type=\"button\" class=\"btn btn-primary\">Save changes</button>";
        echo "</div></div></div></div>";
        //END MODAL
        echo "</div></div></div></div></div>";
  }

mysqli_close($con);
?>
<!-- end PHP -->
</font>
<?php include 'footer.html' ?>

</div><!-- /.container -->

 

  
</body>
</html>
