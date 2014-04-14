<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>


<head>
    <!-- Bootstrap core CSS
    <link href="css/bootstrap.css" rel="stylesheet"> <!-- THIS IS A BUG FIX HACK - DONT CHANGE - TALK TO TAYLOR -->

	<link href="css/userpage.css" rel="stylesheet">
</head>


<!-- Login Modal -->
<?php include 'login_modal.html' ?>
<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container well">
	<div class="row clearfix">
		<div class="col-md-12 column" style="margin-top:10px;">
<h1 class="usernameHeader"><?php echo "<span class=\"entypo-bookmark\" style=\"background-color: #fa8d67; padding: 1%;\">" . $_SESSION['username'] ."  </span>"; ?></h1>
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
	 <label for="grecia" class="entypo-chart-bar">Stats</label>
     <label for="espana" class="entypo-vcard">Profile</label>
     <label for="italia" class="entypo-trophy">Matches</label>
	<!--  <label for="alemania" class="entypo-clipboard">Friends</label> -->
    </nav>

 <div>  


  <article class='europa'>
     <div class='pais grecia'>
		<table>
		   <caption><div class="userHeader"><b>My Stats</b></div></caption>
		 <tbody>
		    <?php include 'userMGMT/userStats.php' ?>
		   </tbody> 
		</table>      
    </div>

    <div class='pais espana'>
		<table>
		   <caption> <div class="userHeader" ><b>Profile Info</b></div></caption>
		   <tbody>
		    <?php include 'userMGMT/userProfile.php' ?>
		   </tbody>
		</table>      
    </div>
    
    <div class='pais italia'>
<table>
   <caption><div class="userHeader"><b>My Matches</b></div></caption>
   <tbody>
       <?php include 'userMGMT/userMatches.php' ?>

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
