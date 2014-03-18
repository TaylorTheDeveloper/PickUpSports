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
	<div class="row clearfix media well">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column text-center">
					<img alt="140x140" src="http://placehold.it/140x140&text=profilepic" class="img-circle" />
					<h2><?php echo $_SESSION['username']; ?></h2>
				</div>
				<div class="col-md-2 column">
					<h2> Stats: </h2><hr>
					 <address> <strong>Games Played: 12 </strong><br /> Favorite Sport: Baseball<br /> Florida<br /> <abbr title="zip">zip:</abbr> 32304 </address>
				</div>
				<div class="col-md-8 column">
					<div class="media well">
						 <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/sports/" class="media-object" alt='' /></a>
						<div class="media-body">
							<h4 class="media-heading">
								Potential Multimedia
							</h4> Maybe Below? Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							<div class="media">
								 <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/sports/" class="media-object" alt='' /></a>
								<div class="media-body">
									<h4 class="media-heading">
										Maybe Instead a Histogram of player history?
									</h4> Maybe Below? Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
<?php include 'game_forms.html' ?>


<?php include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
