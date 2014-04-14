 <?php //Query Database
function random_color_part() {
  return str_pad( dechex( mt_rand( 150, 255 ) ), 3, '0', STR_PAD_LEFT);
}
function random_color() {
  return random_color_part();
  /* return random_color_part() . random_color_part() . random_color_part()*/
}
//Handle Sports Value
function handleSports($val,$name,$max){


$percent = ($val/$max) * 100;
if($val > 0){
  echo "<tr> <td>" . $name . "</td>";
  echo "<td><div style=\"margin: 1%; width: 99%; border: 1px solid #07ad79;border-radius: .3rem\">
  <div style=\"color: #ffffff; padding: 5px; width:" . $percent . "%; background: #" . random_color() . ";\">" . $val . "</div>
  </div></td>";
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
$result = mysqli_query($con,"SELECT * FROM gameHistory WHERE user_idnum = '$uid'" );
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}
$count = 1;
while($row = mysqli_fetch_array($result))
  {
    $baseball = $row['baseball'];
    $basketball = $row['basketball'];
    $football = $row['football'];
    $soccer = $row['soccer'];
    $hockey = $row['hockey'];
    $tennis = $row['tennis'];
    $frisbee = $row['frisbee'];   
    $count++;           
  }
  $highVal = max($baseball, $basketball, $football, $soccer, $hockey, $tennis, $frisbee);
  if($highVal == 0){
    $highVal=1;
  }

 

  echo "<tr><td><b>Games Played:</b></td><td></td></tr>";
  handleSports($baseball, "Baseball", $highVal);
  handleSports($basketball,"Basketball", $highVal);
  handleSports($football,"Football", $highVal);
  handleSports($soccer,"Soccer", $highVal);
  handleSports($hockey,"Hockey", $highVal);
  handleSports($tennis,"Tennis", $highVal);
  handleSports($frisbee,"Frisbee", $highVal);






mysqli_close($con);
?>