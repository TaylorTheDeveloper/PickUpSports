<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>


<br><br><br><!-- change out for margin -->
<div class="container">
	<br><br>
	<div class="row clearfix media well" style="margin-top: -1%;">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column text-center">
				<h2><?php echo $_SESSION['username']; ?></h2>
					<img alt="140x140" src="http://placehold.it/140x140&text=profilepic" class="img-circle" />
					
				</div>
				<div class="col-md-2 column">
					<h2> Stats: </h2><hr>
					 <address> <strong>Games Played: 12 </strong><br /> Favorite Sport: Baseball<br /> Florida<br /> <abbr title="zip">zip:</abbr> 32304 </address>
				</div>
				<div class="col-md-8 column">
					<div class="media well">
						<?php include 'userMGMT/userStats.php' ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row clearfix media well" style="margin-top: -1%;">
<?php include 'game_forms.html' ?>
</div>


<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
