<?php 
 function nameConvert($val) {
    switch ($val) {
  case 'Soccer': return "soccer";
    break;
  case 'Football': return "football";
    break;
  case 'Baseball': return "baseball";
    break;
  case 'Basketball': return "basketball";
    break;
  case 'Hockey': return "hockey";
    break;
    case 'Tennis': return "tennis";
    break;
  case 'Frisbee': return "frisbee";
    break;
  default: return "frisbee";
    break;
  }
}

session_start();
$uname=$_SESSION['username'];    
$uid = $_SESSION['user_idnum'];
$id = $_POST['gameID'];
$currentplayer = $_POST['currplayers']+1;

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
    
    while($row = mysqli_fetch_array($result))
      {
        if($_POST){
          $name = $_POST['gameType'];
          $id = $_POST['gameID'];
        }
        else{
          $name = "Baseball";
          $id = 1;
        }
          $gameToUpdate = $row[nameConvert($name)];  
          $totalGames = $row['gamesPlayed'];  

      }
      ++$gameToUpdate;//Update Game
      ++$totalGames;//Ipdate total


//updategame history
$sql = "UPDATE gameHistory SET " . nameConvert($_POST['gameType']) . "=" . $gameToUpdate . ", gamesPlayed=" . $totalGames .  " WHERE username='$uname'";
if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
//update match current players
$sql = "UPDATE matches SET match_currentplayers='$currentplayer' WHERE match_id='$id'";

if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
//Insert Admin player onto match playerlist
$sql = "INSERT INTO matchplayers ( `match_id`, `user_idnum`) VALUES ('$id','$uid')";
  if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
  mysqli_close($con);
  header( 'Location: ../matches.php?id=' . $id);

    mysqli_close($con);
} 
else {
    header( 'Location: ../login_page.php');
}

?>



