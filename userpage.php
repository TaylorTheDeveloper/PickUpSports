<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->
<?php
//session_destroy();
?>

<div class="container">
<br><br><br>
	<div class="row clearfix">
		<div class="col-md-2 column">
		<?php 
		session_start();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
		} else {
		    echo "Please log in first to see this page.";
		}
		?>
			<img alt="140x140" src="http://placehold.it/140x140&text=ProfilePic" />
		</div>
		<div class="col-md-10 column">
		<h3> Recent matches! </h3>
		</div>
	</div>

	<br><hr><br>
<?php include 'game_forms.html' ?>


<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
