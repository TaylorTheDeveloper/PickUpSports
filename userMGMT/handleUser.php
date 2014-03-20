<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

$gameType= ">" . $_POST['gameType'] . "'"; 
$gameType =strtolower(trim($gameType, " "));
echo "SPORT: " . $gameType . "<br>";
$gameID=$_POST['gameID']; 
echo "ID: " . $gameID . "<br>";

 //Print Whole Database
//Connect
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$uid = "rob";
//Select Data
$result = mysqli_query($con,"SELECT * FROM gameHistory WHERE username = '$uid' ");
//Check that it returns true
if($result==false){
  header( 'Location: ../404.php');
}

//Print Data by row
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
  echo $baseball;

mysqli_close($con);
  



    //header( 'Location: ../join_confirmation.php');
} else {
    header( 'Location: ../login_page.php');
}
?>




