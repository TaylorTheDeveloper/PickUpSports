<?php //Query Database
             //Handle Sports Value
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
 $players = mysqli_query($con,"SELECT * FROM matchPlayers JOIN users ON users.user_idnum=matchplayers.user_idnum WHERE match_id = '$this_match_id'" );
              
             // echo "<tr><td><b>General:</b></td><td></td></tr>";
              while($row = mysqli_fetch_array($players))
                {
                 echo "<tr><td>User</td><td>" . $row['username'] . "</td></tr>"; 
                 //echo "<tr><td>Name</td><td>" . $row['first_name'] ." ". $row['last_name'] .  "</td></tr>"; 
                 //echo "<tr><td>Email</td><td>" . $row['email'] . "</td></tr>"; 
                 //echo "<tr><td>Zip</td><td>" . $row['zip'] . "</td></tr>"; 
                 //echo "<tr><td>Favorite Sport</td><td>" . $row['favSport'] . "</td></tr>"; 
                }
    mysqli_close($con);
?>