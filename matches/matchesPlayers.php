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
              
             // echo "<tr><td><b>General:</b></td><td></td></tr>";

                 echo "<tr align=\"middle\"><td style=\"width:50%\"><b>Username</b></td style=\"width:33%\"><td><b>Name</b></td><td align=\"middle\" style=\"width:50%; right:2% \"><b>Favorite Sport</b></td></tr>"; 
              while($row = mysqli_fetch_array($players))
                {
                 echo "<tr align=\"middle\"><td>" . $row['username'] . "</td><td >" . $row['first_name'] . "</td><td style=\"right:5%\">" . $row['favSport'] . "</td></tr>"; 
                }
    mysqli_close($con);
?>