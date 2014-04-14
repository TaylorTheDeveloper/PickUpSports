<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container">


<div class="container well">
<div style="margin: 5% 5%;">
<div class="deleteHeader"><?php echo "Hey " . $_SESSION['username']?>
	<p> Are you sure you want to delete your account?</p>
 </div>
</div>
	<div class="row clearfix media">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<center>
				<div style="margin: 2% 2%;">
					<img height="185" width="185" src="img/pickUp-Logo.png" />
					</div>
					<div style="margin: 5% 20% "class="deleteHeader">
					<h2>I'm aware this action is undoable and all of my data will be lost</h2>
					 </div>

					<div style="margin: 5% 10%;">

					 <form accept-charset="UTF-8" id="linkform" class="form-horizontal" role="form" method="post" action="userMGMT/delete_account.php" parsley-validate >           
   					<input  class="color red styled-button-1" style="padding: 1.5% 2%;  margin-right:40px;" type="submit" value="Delete My Account :(">
   					 <a href="userpage.php"><button type="button" style="padding: 1.5% 2%;" class="nav styled-button-1">Cancel</button></a>
   					</form>  					
				</center>
				
			</div>
		</div>
	</div>
</div>

<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
