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
<?php echo "<div class=\"searchHeader\"><span class=\"glyphicon glyphicon-search\" style=\"background-color: #ffffff; padding: 1%; \"></span><span> " . " " . "Games Near " . $_POST['zip_location'] ."</div></span>"; ?> <br> <hr>
    </h1>


<?php
 //Query Database
   function handleImg($name){
              switch ($name) {
    case "Baseball":
        return "img/search_icons/baseball.png";
        break;
    case "Basketball":
        return "img/search_icons/basketball.png";
        break;
    case "Soccer":
        return "img/search_icons/soccer.png";
        break;
    case "Tennis":
        return "img/search_icons/tennis.png";
        break;
    case "Hockey":
        return "img/search_icons/hockey.png";
        break;
    case "Ultimate_Frisbee":
        return "img/search_icons/frisbee.png";
        break;
    case "Football":
        return "img/search_icons/football.png";
        break;
    default:
        return "img/search_icons/medal.png";
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
$result = mysqli_query($con,"SELECT * FROM matches WHERE match_zip >  '$zip_bottom' AND match_zip < '$zip_top' AND matchp_pubpriv = 0 AND  match_date >= CURDATE() ORDER BY match_date ASC");
//Only get public matches
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}

$num = 1;
//Print Data by row
while($row = mysqli_fetch_array($result))
  {
    $dateInfo = date_parse($row['match_date'] . " " . $row['match_time']);
    $monthNum = $dateInfo['month'];
    $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));

    $matchType = $row['match_type'];
    $matchID = $row['match_id'];

     echo "<div class=\"container\" >";
  echo "<div class=\"row clearfix\">";  
     echo "<div class=\"col-md-12 column\">";
       echo "<div class=\"row clearfix media well\">";
         echo "<div class=\"col-md-2 column\">";
           echo "<img class=\"img\" height=\"80%\" width=\"80%\" src=\"" . handleImg( $matchType) . "\" />";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";               
         echo "<h3 style=\"margin: -1% 0% 1% 0%; padding: 0% 0% 2% 0%;\">Sport</h3><hr style=\"margin: -1% 0% 5% 0%; height: 2px; background-color:#ffb100;\">";
         echo "<div class=\"searchtext\"><p>" . $row['match_type'] . "</p></div>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3 style=\"margin: -1% 0% 1% 0%; padding: 0% 0% 2% 0%;\">Where</h3><hr style=\"margin: -1% 0% 5% 0%; height: 2px; background-color:#ffb100;\">";
         echo "<div class=\"searchtext\"><p>" . $row['match_location'] . "</p></div>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3 style=\"margin: -1% 0% 1% 0%; padding: 0% 0% 2% 0%;\">When</h3><hr style=\"margin: -1% 0% 5% 0%; height: 2px; background-color:#ffb100;\">";
         echo "<div class=\"searchtext\"><p>Date: "  . $monthName . " " . $dateInfo['day'] . ", " . $dateInfo['year'] . "</p></div>";
         $min="00";
         if($dateInfo['minute']==0){
            $min="00";
         }
         else{
            $min = $dateInfo['minute'];
         }
         echo "<div class=\"searchtext\"><p>Time: " . $dateInfo['hour'] . ":"  . $min .  " PM</p></div>";
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         echo "<h3 style=\"margin: -1% 0% 1% 0%; padding: 0% 0% 2% 0%;\">Players</h3><hr style=\"margin: -1% 0% 5% 0%; height: 2px; background-color:#ffb100;\">";
         echo "<div class=\"searchtext\"><p> ". $row['match_currentplayers'] . " / ". $row['match_maxplayers'] . "</p></div>";
         $currentplayers = $row['match_currentplayers'];
         $fullgame = false;
         if($row['match_currentplayers'] == $row['match_maxplayers']){
         echo "<p> This Game is Full </p>";
         $fullgame=true;
         }
         echo "</div>";
         echo "<div class=\"col-md-2 column\">";
         if($fullgame==true){
         	  echo "<a id=\"newgame\" href=\"newgame.php\" role=\"button\" class=\"btn\" ><button type=\"button\" class=\"color green styled-button-1\" data-toggle=\"regmodal\" data-target=\"#regModal\">New<br>". $matchType . " Game</button></a>";
         }
         else{
        echo "<a id=\"modal-627836\" href=\"#modal-container-" . $num . "\" role=\"button\" class=\"btn\" data-toggle=\"modal\"><button type=\"button\" class=\"color green styled-button-1\" data-toggle=\"regmodal\" data-target=\"#regModal\">Join Game</button></a>";
         }
         $mid =  $row['match_id'];
         //Start Modal
        echo "<div class=\"modal fade\" id=\"modal-container-" . $num . "\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
        echo "<div class=\"modal-dialog\">";
        echo "<div class=\"modal-content\">";
        echo "<div class=\"modal-header\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>";
        echo "<h4 class=\"modalHeader\" id=\"myModalLabel\"> Players </h4>";
        echo " </div>";
        echo "<div class=\"modal-body\">";
        echo "<div class=\"row clearfix\">";//start body row clearfix
		echo "<div class=\"col-md-6 column\">";//Column 1 (players)

/*PLAYERLIST*/




 $this_match_id = $row['match_id'];
 $players = mysqli_query($con,"SELECT * FROM matchPlayers JOIN users ON users.user_idnum=matchplayers.user_idnum WHERE match_id = '$this_match_id'" );
$alreadyJoinedGame=false;
$ctr = 0;
echo "<ol>";
    while($row = mysqli_fetch_array($players))  {

        echo "<font size=\"4\"><li>". $row['username'] . "</li></font>";
        if (isset($_SESSION['loggedin']))
        {
            if($row['username']==$_SESSION['username']){
                $alreadyJoinedGame=true;
            }
        }
        $ctr++;
    }
echo "</ol>";

  //END PLAYERLISTING

		echo "</div>";//End Column 1
		echo "<div class=\"col-md-6 column\">";//Column 2 (details)
		echo "<img alt=\"140x140\" src=\"img/search_icons/medal.png\" class=\"img-responsive pull-right\" style=\"margin-right:10%;\" />";
		echo "</div>";//End Column 2
		echo "</div>";//End body row clearfix
        echo "</div>";
        echo "<div class=\"modal-footer row clearfix\">";
        echo "<button type=\"button\" class=\"nav styled-button-1 pull-right\" style=\"margin-right:1%;\" data-dismiss=\"modal\">Close</button>";
        echo "<form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" action=\"userMGMT/handleUser.php\">";
        echo "<input type=\"hidden\" id=\"gameType\" name=\"gameType\" value=\"". $matchType . "\">";
        echo "<input type=\"hidden\" id=\"gameID\" name=\"gameID\" value=\"" . $matchID . "\">";        
        echo "<input type=\"hidden\" id=\"currplayers\" name=\"currplayers\" value=\"" . $currentplayers . "\">";
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            if($alreadyJoinedGame==true){
            	$_SESSION['searchMatchID'] = $matchID;
            echo "</form><form accept-charset=\"UTF-8\" id=\"linkform\" class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"userMGMT/leavegame.php\" parsley-validate >";           
            echo "<input class=\"color red styled-button-1\" style=\"padding: -1%; margin-right:1%;\" type=\"submit\" value=\"Leave Game\"></form> ";
            $alreadyJoinedGame=false;
            }else {
            $_SESSION['searchMatchID'] = $mid;
            echo "<input class=\"color green styled-button-1\" style=\"margin-right:1%;\" type=\"submit\" value=\"Join Game!\"> </form>";
            }
        } else {
            //echo "<input class=\"color green styled-button-1\" style=\"padding: -1%; margin-right:1%;\" type=\"submit\" value=\"Please Sign In\"></form> ";
            echo "<a href=\"#searchLogin\" onClick=\"$('#modal-container-" . $num . "').hide(); $('#loginbox').show()\"><button type=\"button\" class=\"color green styled-button-1\" style=\"margin-right: 1%;\" data-toggle=\"modal\" data-target=\"#loginModal\">Please Sign In</button></a>";
        }
       
      
        echo "</div></div></div></div>";
        //END MODAL
        echo "</div></div></div></div></div>";
        $num++;
  }


  if($num ==1)
  {
     echo "<div class=\"container\" >";
       echo "<div class=\"row clearfix media well\">";
        echo "<div class=\"introtext\">";
        echo "There doesn't seem to be any games in your area.";
        echo "<br><br><br>";
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo "<a href=\"newgame.php\"><button type=\"button\" style=\"padding: 1% 1%;\" class=\"color green styled-button-1\">Create A Match!</button></a>";
                } else {
                    $_SESSION['newgame'] = true;
                    echo "<a href=\"#newgame\"><button type=\"button\" class=\"color green styled-button-1\"  style=\"padding: 1.5% 2%;\" data-toggle=\"modal\" data-target=\"#loginModal\">Create A Match!</button></a>";
                }
        echo "</div>";
        echo "</div>";
        echo "</div>";


  }
  else{


        echo "<div class=\"container\" >";
       echo "<div class=\"row clearfix media\">";
        echo "<div class=\"introtext\">";
        echo "Not seeing any games you like?";
        echo "<br><br><br>";
        //echo "</div>"

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                {
                    echo "<a href=\"newgame.php\"><button type=\"button\" style=\"padding: 1% 1%;\" class=\"color green styled-button-1\">Create A Match!</button></a>";
                } 
                else 
                {
                    $_SESSION['newgame'] = true;
                    echo "<a href=\"#newgame\"><button type=\"button\" class=\"color green styled-button-1\"  style=\"padding: 1.5% 2%;\" data-toggle=\"modal\" data-target=\"#loginModal\">Create A Match!</button></a>";
                }

        echo "</div>";
        echo "</div>";
        echo "</div>";

}


mysqli_close($con);
?>
<!-- end PHP -->


</font>
<?php //include 'footer.html' ?>

</div><!-- /.container -->

 

  
</body>
</html>
