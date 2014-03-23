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

$num = 1;
//Print Data by row
while($row = mysqli_fetch_array($result))
  {
    $matchType = $row['match_type'];
    $matchID = $row['match_id'];
     echo "<div class=\"container\" >";
  echo "<div class=\"row clearfix\">";
     echo "<div class=\"col-md-12 column\">";
       echo "<div class=\"row clearfix media well\">";
         echo "<div class=\"col-md-2 column\">";
           echo "<img class=\"img\"  src=\"" . handleImg( $matchType) . "\" />";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3>Where</h3>";
         echo "<p>" . $row['match_location'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3>When</h3>";
         echo "<p>" . $row['match_date'] . "</p>";
         echo "<p>" . $row['match_time'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3>Players</h3>";
         echo "<p> Max " . $row['match_maxplayers'] . "</p>";
         echo "<p> Curr " . $row['match_currentplayers'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";               
         echo "<h3>Details</h3>";
         echo "<p>" . $row['match_type'] . "</p>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
        echo "<a id=\"modal-627836\" href=\"#modal-container-" . $num . "\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"regmodal\" data-target=\"#regModal\">Join Game</button></a>";
         $mid =  $row['match_id'];
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

/*PLAYERLIST*/
 $this_match_id = $row['match_id'];
 $players = mysqli_query($con,"SELECT * FROM matchPlayers JOIN users ON users.user_idnum=matchplayers.user_idnum WHERE match_id = '$this_match_id'" );

    while($row = mysqli_fetch_array($players))  {
        echo $row['username'] . "<br>";
    }


  //END PLAYERLISTING

		echo "</div>";//End Column 1
		echo "<div class=\"col-md-6 column\">";//Column 2 (details)
		echo "<img alt=\"140x140\" src=\"http://lorempixel.com/140/140/\" class=\"img-circle  pull-right\" style=\"margin-right:10%;\" />";
		echo "</div>";//End Column 2
		echo "</div>";//End body row clearfix
        echo "</div>";
        echo "<div class=\"modal-footer row clearfix\">";
        echo "<button type=\"button\" class=\"btn btn-default pull-right\" style=\"margin-right:1%;\" data-dismiss=\"modal\">Close</button>";
        echo "<form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" action=\"userMGMT/handleUser.php\">";
        echo "<input type=\"hidden\" name=\"gameType\" value=\"". $matchType . "\">";
        echo "<input type=\"hidden\" name=\"gameID\" value=\"" . $matchID . "\">";
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $_SESSION['searchMatchID'] = $mid;
            echo "<input class=\"btn btn-info pull-right\" style=\"margin-right:1%;\" type=\"submit\" value=\"Join Game!\"> </form>";
        } else {
            $_SESSION['searchMatchID'] = $mid;
            echo "<a href=\"#\" onClick=\"$('#modal-container-" . $num . "').hide(); $('#loginbox').show()\"><button type=\"button\" class=\"btn btn-medium btn-info\" style=\"margin-right: 1%;\" data-toggle=\"modal\" data-target=\"#loginModal\">Sign In</button></a>";
        }
       
      
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
