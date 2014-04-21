<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/PickUpSports/functions.php";
include_once($path); 

session_start();
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$p_date = $_POST['date'];
$phpdate = strtotime( $p_date );
$mysqldate = date( 'Y-m-d H:i:s', $phpdate );
$p_date = substr($mysqldate,0,10);

//$p_pubPriv = 1;
if($_POST["pubPriv"]=="false"){
	$p_pubPriv = 0 ;
}
else
{
	$p_pubPriv = 1 ;
}

$mid = $_SESSION['editMatchID'];
$mtype = $_POST['sports'];
$mlocation = $_POST['location'];
$mzip = $_POST['zip'];
$mtime = $_POST['time'];
$mMaxPlayers = $_POST['maxPlayers'];
//$mCurPlayers = $_POST['match_cur'];
//updategame history

$sql = "UPDATE matches SET match_type='$mtype', match_location='$mlocation', match_zip='$mzip', match_date='$p_date', match_time='$mtime', match_maxplayers='$mMaxPlayers', matchp_pubpriv='$p_pubPriv' WHERE match_id='$mid'";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

 mysqli_close($con);

  header( 'Location: ../userpage.php' );
?>
