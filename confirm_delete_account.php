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
<center><h1><?php echo "Hey " . $_SESSION['username'] . ", are you sure you want to delete your account? "; ?> !</h1><center>
</div>
	<div class="row clearfix media">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<center>
				<div style="margin: 2% 2%;">
					<img height="185" width="185" src="img/pickUp-Logo.png" />
					</div>
					<div style="margin: 5% 20%;">
					<h2>Yes, <font color="#f97041"><b>delete</b> my account</font>. I'm aware this action is undoable and all of my data will be lost</h2>
					 </div>

					<div style="margin: 5% 10%;">
					 <form accept-charset="UTF-8" id="linkform" class="form-horizontal" role="form" method="post" action="userMGMT/delete_account.php" parsley-validate >           
   					<input  class="color green styled-button-1" style="padding: 2.5% 5%;" type="submit" value="Delete My Account :(">
   					</form>
   					</div>
   					
				</center>
				
			</div>
		</div>
	</div>
</div>

<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
