<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="games"; // Database name 
$tbl_name="users"; // Table name 

session_start();
$username=$_SESSION['username'];
$uid=$_SESSION['user_idnum'];
$mid=$_SESSION['searchMatchID'];
//$currentplayer=$currentplayer - 1;//This needs to be one minus current player value


$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("games", $con);

// sending query

mysql_query("DELETE FROM matchplayers WHERE user_idnum='$uid' AND match_id='$mid'") or die(mysql_error());
mysql_query("UPDATE matches 
	SET match_currentplayers = CASE WHEN match_currentplayers = 0 THEN 0
                        WHEN match_currentplayers > 0 THEN match_currentplayers-1
                        END
	WHERE match_id='$mid'") or die(mysql_error());  


mysql_close($con);

header( 'Location: ../matches.php?id=' . $mid);
?>

