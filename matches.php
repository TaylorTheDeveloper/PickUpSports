<!DOCTYPE html>
<html lang="en">

<!-- Get Match Info -->
<?php 
$con=mysqli_connect("localhost:3306","root","","games");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

$this_match_id = $_GET['id'];

$matchExist = mysqli_query($con,"SELECT * FROM matches WHERE match_id = '$this_match_id'" );

while($row = mysqli_fetch_array($matchExist))  {
   $matchType = $row['match_type'];
   $matchID = $row['match_id'];
   $adminID = $row['admin_user_id'];
   $matchLocation = $row['match_location'];
   $matchZip = $row['match_zip'];
   $matchDate = $row['match_date'];
   $matchTime = $row['match_time'];
   $maxPlayers = $row['match_maxplayers'];
   $currPlayers = $row['match_currentplayers'];
   $pubPrib = $row['matchp_pubpriv'];
}



if($_GET['id']==NULL){
	header( 'Location: index.php');
}
else if($_GET['id'] == $matchID){
	$_SESSION['mid'] = $_GET['id'];
}
else{
	header( 'Location: 404.php');
}

//mysqli_close($con);
?>


<!-- Doc Header -->
<?php include 'head.html' ?>
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"> <!-- THIS IS A BUG FIX HACK - DONT CHANGE - TALK TO TAYLOR -->

	<link href="css/matchespage.css" rel="stylesheet">
</head>


<!-- Login Modal -->
<?php include 'login_modal.html' ?>
<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container well">
	<div class="row clearfix">
		<div class="col-md-12 column">
<h1><?php echo "<span class=\"entypo-bookmark\" style=\"background-color: #f97041; padding: 1%;\">" . $matchLocation . ": " . $matchType . " on " . $matchDate . ", " . $matchTime . "</span>"; ?></h1>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
<!-- Countries -->
<input type="radio" id="europa" name="continente" checked='checked' />

<!-- Europa -->
<input type="radio" id="espana" name="pais" checked='checked' />
<input type="radio" id="italia" name="pais" />
<input type="radio" id="grecia" name="pais" />
<input type="radio" id="alemania" name="pais" />

<section>

    <nav class='paises eu'>    
	 <label for="grecia" class="entypo-trophy">Players</label>
     <label for="espana" class="entypo-location">Info</label>
     <label for="italia" class="entypo-share">Share</label>
	<!--  <label for="alemania" class="entypo-clipboard">Friends</label> -->
    </nav>

 <div>  


  <article class='europa'>
     <div class='pais grecia'>
		<table>
		   <caption><label class="entypo-users"><b>Match Players</b></label></caption>
		 <tbody>
		    <?php include 'matches/matchesPlayers.php' ?>
		   </tbody> 
		</table>      
    </div>

    <div class='pais espana'>
		<table>
		   <caption> <label class="entypo-info"><b>Match Info</b></label></caption>
		   <tbody>
		    <?php include 'matches/matchesLocation.php' ?>
		   </tbody>
		</table>      
    </div>
    
    <div class='pais italia'>
<table>
   <caption><label class="entypo-share"><b>Share Match</b></label></caption>
   <tbody>
       <?php include 'matches/matchesShare.php' ?>

   </tbody>
</table>      
    </div>

        <div class='pais alemania'>
<table>
   <caption>Your Friends:</caption>
   <tbody>
       <?php include 'userMGMT/userFriends.php' ?>
   </tbody>
</table>      
    </div>
    
 
  </article>
     
 </div> 
</section>


				
		</div>
	</div>

<?php //include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
