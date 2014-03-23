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
              $result = mysqli_query($con,"SELECT * FROM matchPlayers JOIN matches ON matches.match_id=matchplayers.match_id WHERE user_idnum = '$uid'" );
              //Check that it returns true
              if($result==false){
                echo "Master Wayne, I've failed you";
              }
              echo "<tr><td><b>Date</b></td><td><b>Link</b></td></tr>"; 
              while($row = mysqli_fetch_array($result))
                {
                 echo "<tr><td>" . $row['match_date'] . "</td><td><a href=\"". 'matches.php?id=' . $row['match_id'] . "\">" . $row['match_type'] . " at " . $row['match_location'] . "</a></td></tr>"; 
                }
    mysqli_close($con);
?>