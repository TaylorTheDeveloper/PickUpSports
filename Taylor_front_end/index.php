<!DOCTYPE html>
<html>
<!-- Document Header -->
<?php include 'head.php' ?>
<!-- Document Navigation Bar -->
<?php include'navbar.php'; ?>


  <body>

    <div class="container"> <!-- body containter -->

	<!--Change out for slider --> 
	<div class="jumbotron">
		<h1>PickUp Sports</h1>
		<p>Let's play!</p>
		<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
	</div>


	<div class="row clearfix">
		<div class="col-md-3 column">
		</div>
		<div class="col-md-3 column">
		<!-- New Game -->
			<form role="form">
				<div class="form-group">
					 <label for="sport">Sport</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>

				<button type="submit" class="btn btn-default">Let's Play</button>
			</form>
		</div>
		<div class="col-md-3 column">
		<!-- Existing Game -->
			<form role="form">
				<div class="form-group">
					 <label for="sport">Sport</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="zip">Zip</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<button type="submit" class="btn btn-default">Find a Game</button>
			</form>
		</div>
		<div class="col-md-3 column">
		</div>
	</div>
</div> <!-- End body container --> 

  </body>


</html> <!-- End HTML doc -->