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
$result = mysqli_query($con,"SELECT * FROM matchPlayers JOIN matches ON matches.match_id=matchplayers.match_id WHERE user_idnum = '$uid' ORDER BY match_date ASC" );
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}
echo "<tr><td><b>Date</b></td><td><b>Link</b></td></tr>"; 
$today = getdate();
while($row = mysqli_fetch_array($result))
  {
    $color = "#39e1ac";
    $todayDate = $today['year'] . "-" . $today['mon'] . "-" . $today['mday'];
    $matchDate = $row['match_date'];
    $dtToday = new DateTime($todayDate);
    $dtMatch = new DateTime($matchDate);
    if($dtToday > $dtMatch){
      $color = "#f77575";
    }

   echo "<tr bgcolor=\"" . $color . "\"><td><font color=\"#ffffff\">" . $row['match_date'] . "</font></td><td><a style=\"color:#ffffff\" href=\"". 'matches.php?id=' . $row['match_id'] . "\">" . $row['match_type'] . " at " . $row['match_location'] . "</a></td></tr>"; 
  }
    mysqli_close($con);
?>