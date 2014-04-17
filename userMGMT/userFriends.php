  <?php //Query Database
//Handle Sports Value
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/PickUpSports/functions.php";
include_once($path); 

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