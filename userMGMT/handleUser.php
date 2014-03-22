<?php 

 function nameConvert($val) {
    switch ($val) {
  case ' Soccer': return "soccer";
    break;
  case ' Football': return "football";
    break;
  case ' Baseball': return "baseball";
    break;
  case ' Basketball': return "basketball";
    break;
  case ' Hockey': return "hockey";
    break;
    case ' Tennis': return "tennis";
    break;
  case ' Frisbee': return "frisbee";
    break;
  default: return "frisbee";
    break;
  }
     }

session_start();
$uname=$_SESSION['username'];

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //Connect
    $con=mysqli_connect("localhost:3306","root","","games");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    //Select Data
    $result = mysqli_query($con,"SELECT * FROM gameHistory WHERE username = '$uname' ");
    //Check that it returns true
    if($result==false){
      header( 'Location: ../404.php');
    }
    //Print Data by row
    while($row = mysqli_fetch_array($result))
      {
        if($_POST){
          $name = $_POST['gameType'];
        }
        else{
          $name = " Baseball";
        }
          $gameToUpdate = $row[nameConvert($name)];  
          $totalGames = $row['gamesPlayed'];  

      }

      ++$gameToUpdate;//Update Game
      ++$totalGames;//Ipdate total
    mysqli_query($con,"UPDATE gameHistory SET " . nameConvert($_POST['gameType']) . "=" . $gameToUpdate . ", gamesPlayed=" . $totalGames .  " WHERE username='$uname'");

    mysqli_close($con);
      
echo $_SESSION['searchMatchID'];
    //header( 'Location: ../matches.php?=' . $_SESION['searchMatchID']);
} 
else {
    header( 'Location: ../login_page.php');
}
?>




