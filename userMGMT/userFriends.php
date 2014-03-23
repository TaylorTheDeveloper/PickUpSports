  <?php //Query Database
             //Handle Sports Value

             function handleSports($val,$name,$max){
              

              $percent = ($val/$max) * 100;
              if($val > 0){
                echo "<tr> <td>" . $name . "</td>";
                echo "<td><div style=\"margin: 1%; width: 99%; border: 1px solid #07ad79;\">
                <div style=\"color: #ffffff; padding: 5px; width:" . $percent . "%; background: #" . random_color() . ";\">" . $name . ":" . $val . "%</div>
                </div></td>";
                 echo "<td>" . $val . "</td></tr>";
                }
              }

              $uid = $_SESSION['user_idnum'];
              //Connect
              $con=mysqli_connect("localhost:3306","root","","games");
              // Check connection
              if (mysqli_connect_errno())
              {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              //Select Data
              $result = mysqli_query($con,"SELECT * FROM users WHERE user_idnum = '$uid'" );
              //Check that it returns true
              if($result==false){
                echo "Master Wayne, I've failed you";
              }

              // if(!(mysqli_fetch_array($result))){
              //     echo "Error Opening user Stats!";
              // }
              
              while($row = mysqli_fetch_array($result))
                {
                  $baseball = $row['baseball'];
                  $basketball = $row['basketball'];
                  $football = $row['football'];
                  $soccer = $row['soccer'];
                  $hockey = $row['hockey'];
                  $tennis = $row['tennis'];
                  $frisbee = $row['frisbee'];              
                }
                $highVal = max($baseball, $basketball, $football, $soccer, $hockey, $tennis, $frisbee);
                if($highVal == 0){
                  $highVal=1;
                }

                handleSports($baseball, "Baseball", $highVal);
                handleSports($basketball,"Basketball", $highVal);
                handleSports($football,"Football", $highVal);
                handleSports($soccer,"Soccer", $highVal);
               // handleSports($hockey,"Hockey", $highVal);
                handleSports($tennis,"Tennis", $highVal);
                handleSports($frisbee,"Frisbee", $highVal);



              mysqli_close($con);
              ?>