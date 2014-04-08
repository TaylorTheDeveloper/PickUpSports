<?php //Query Database

//Connect
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Select Data
$this_match_id = $matchID;

$players = mysqli_query($con,"SELECT * FROM matchPlayers JOIN users ON users.user_idnum=matchplayers.user_idnum WHERE match_id = '$this_match_id'" );
$alreadyJoinedGame=false;
    while($row = mysqli_fetch_array($players))  {

        //echo $row['username'] . "<br>";
        if($row['username']==$_SESSION['username']){
            $alreadyJoinedGame=true;
        }
    }





$players = mysqli_query($con,"SELECT * FROM matches WHERE match_id = '$this_match_id'" );


while($row = mysqli_fetch_array($players))
  {
    $dateInfo = date_parse($row['match_date'] . " " . $row['match_time']);
    $monthNum = $dateInfo['month'];
    $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
   echo "<tr><td><b>Game Type:</b></td></tr>"; 
   echo "<tr><td>" . $row['match_type'] . "</td></tr>";
   echo "<tr><td><b>When:</b></td></tr>"; 
   echo "<tr><td>" . $monthName . " " . $dateInfo['day'] . ", " . $dateInfo['year'] . " at "  . $dateInfo['hour'] . ":"  . $dateInfo['minute'] .  "</td></tr>";
   echo "<tr><td><b>Where:</b></td></tr>"; 
   echo "<tr><td>" . $row['match_location'] . ",   Zip: " . $row['match_zip'] .  "</td></tr>";                 
   echo "<tr><td><b>Privacy:</b></td></tr>"; 
   echo "<tr><td>"; 
    if($row['matchp_pubpriv']==true){
      echo "<em>Private.</em> Users must be invited to the game by the user who made the match";
    }else{
      echo "<em>Public.</em> Anyone can join and play.<br>";
     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
      if($alreadyJoinedGame==true){
            echo "<input class=\"color green styled-button-1\" style=\"margin-right:1%;\" type=\"submit\" value=\"You're in this Game\"> ";
            $alreadyJoinedGame=false;
            }else {
            $_SESSION['searchMatchID'] = $row['match_id'];           
      echo "<form accept-charset=\"UTF-8\" id=\"linkform\" class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"userMGMT/handleUser.php\" parsley-validate >";           
      echo "<input type=\"hidden\" name=\"gameType\" value=\"". $row['match_type']. "\">";
      echo "<input type=\"hidden\" name=\"gameID\" value=\"" . $row['match_id'] . "\">";
      echo "<input  class=\"color green styled-button-1\" style=\"padding: -1%; margin-top:1%;\" type=\"submit\" value=\"Join Game!\"></form>";
    }
    } 
  }
    echo "</td></tr>";

  }
    mysqli_close($con);
?>