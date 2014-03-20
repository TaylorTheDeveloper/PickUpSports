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
   function handleImg($name){
              switch ($name) {
    case "Baseball":
        return "img/search_icons/football.png";
        break;
    case "Basketball":
        return "img/search_icons/basketball.png";
        break;
    case "Soccer":
        return "img/search_icons/football.png";
        break;
    default:
        return "img/search_icons/fsu.png";
        }
    }

$_SESSION['sessionZip'] = $_POST["zip_location"];
$range = 50; //Range to search zip
$zip_top = intval($_SESSION['sessionZip']) + $range;
$zip_bottom = intval($_SESSION['sessionZip']) - $range;
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
           echo "<img alt=\"120x120\" class=\"img\"  src=\"" . handleImg( $row['match_type']) . "\" />";
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
         echo "<p> Max " . $row['match_maxplayers'] . "</p>";
         echo "<p> Curr " . $row['match_currentplayers'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h2>Details</h2>";
         echo "<p>" . $row['match_type'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
        echo "<a id=\"modal-627836\" href=\"#modal-container-" . $num . "\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"regmodal\" data-target=\"#regModal\">Join Game</button></a>";
         
         //Start Modal
        echo "<div class=\"modal fade\" id=\"modal-container-" . $num . "\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
        echo "<div class=\"modal-dialog\">";
        echo "<div class=\"modal-content\">";
        echo "<div class=\"modal-header\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>";
        echo "<h4 class=\"modal-title\" id=\"myModalLabel\"> Match Details </h4>";
        echo " </div>";
        echo "<div class=\"modal-body\">";
        echo "<div class=\"row clearfix\">";//start body row clearfix
		echo "<div class=\"col-md-6 column\">";//Column 1 (players)
        $playerlist = $row['playerlist'];        
		$list = explode(";", $playerlist);
		foreach ($list as $k=>$n){ 
		    echo "$n<br>";
		}	
		echo "</div>";//End Column 1
		echo "<div class=\"col-md-6 column\">";//Column 2 (details)
		echo "<img alt=\"140x140\" src=\"http://lorempixel.com/140/140/\" class=\"img-circle  pull-right\" style=\"margin-right:10%;\" />";
		echo "</div>";//End Column 2
		echo "</div>";//End body row clearfix
        echo "</div>";
        echo "<div class=\"modal-footer row clearfix\">";
        echo "<button type=\"button\" class=\"btn btn-default pull-right\" style=\"margin-right:1%;\" data-dismiss=\"modal\">Close</button>";
        echo "<form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" action=\"userMGMT/handleUser.php\">";
        echo "<input type=\"hidden\" name=\"gameType\" value=\" ". $row['match_type'] . "\">";
        echo "<input type=\"hidden\" name=\"gameID\" value=\" ". $row['match_id'] . "\">";
        echo "<input class=\"btn btn-info pull-right\" style=\"margin-right:1%;\" type=\"submit\" value=\"Join Game!\"> </form>";
        echo "</div></div></div></div>";
        //END MODAL
        echo "</div></div></div></div></div>";
        $num++;
  }

mysqli_close($con);
?>
<!-- end PHP -->
</font>
<?php include 'footer.html' ?>

</div><!-- /.container -->

 

  
</body>
</html>
