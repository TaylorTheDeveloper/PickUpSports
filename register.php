<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.html' ?>

<br><br><br><!-- change out for margin -->

<div class="container">

	<center>
	<legend>Register for a new Account</legend>
		<font color="FA7147">
			<form parsley-validate action="userMGMT/register.php" name="newMatch" method="post">
			<br><b>First Name:</b> <br> <input type="text" name="f_name" autofocus parsley-notblank="false" placeholder="Your First Name" required>
			<br><b>Last Name:</b> <br> <input type="text" name="l_name" autofocus parsley-notblank="false" placeholder="Your Last Name" required>			
			<br><b>Username:</b> <br> <input type="text" name="username" autofocus parsley-notblank="false" placeholder="Pick a Username" required>
			<br><b>Email:</b> <br> <input type="text" name="email" autofocus parsley-type="email" placeholder="Your Email" required>
			<br><b>Password:</b><br> <input type="password" name="password" autofocus placeholder="password" required>				
			<!-- <br><b>Confirm Password:</b><br> <input type="password" name="passwordConfirm" parsley-equalto="password" autofocus placeholder="confrim password" required> -->
			<br><b>Zip</b> <br> <input name="zip" parsley-type="digits" parsley-minlength="5" parsley-maxlength="5" placeholder="Ex. 12345" required>
			<br>
			<input type="submit" value="Lets Play!" />
			<br>
			</form>	
		</font>
	</center>

<?php include 'footer.html' ?>

</div><!-- /.container -->

</body>
</html>
