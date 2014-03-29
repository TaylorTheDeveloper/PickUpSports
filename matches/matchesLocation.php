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
$this_match_id = $matchID;
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
   echo "<tr><td>" . $row['match_location'] . ", Zip:" . $row['match_zip'] .  "</td></tr>";                 
   echo "<tr><td><b>Privacy:</b></td></tr>"; 
   echo "<tr><td>"; 
    if($row['matchp_pubpriv']==true){
      echo "private. Users must have the game link to Join";
    }else{
      echo "public. Anyone can join and play.";
    } 
    echo "</td></tr>";

  }
    mysqli_close($con);
?>