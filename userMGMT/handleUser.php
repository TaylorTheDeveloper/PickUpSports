<?php 
//handle user joining a game
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/PickUpSports/functions.php";
include_once($path); 

session_start();
$uname=$_SESSION['username'];    
$uid = $_SESSION['user_idnum'];
$id = $_POST['gameID'];

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
$sql = "UPDATE matches SET match_currentplayers=match_currentplayers+1 WHERE match_id='$id'";
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

} 

?>



