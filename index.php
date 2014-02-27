<!DOCTYPE html>
<html>
<!-- Doc Header -->
<?php include 'head.html' ?>

	<body>	

	<div class="container"> <!-- body containter -->
	<!-- Doc Navigation --> 
	<?php include 'navbar.html' ?>
	<!-- Img Slider / Navigation --> 
	<?php include 'slider.html' ?>


	<div class="row clearfix">
		<div class="col-md-3 column">
		</div>
		<div class="col-md-3 column">
		<form class="form-signin mg-btm" method="post" action="newgame.php">
	    	<h3 class="heading-desc pull-center">Create A Game</h3>
			<div class="main">	        
			 <label for="Sports">Sport</label> <select name="sports">
											<option style="color:gray" value="Choose a sport" selected="selected" > </option>
											<option value="Baseball">Baseball</option>
											<option value="Football">Football</option>
											<option value="Soccer">Soccer</option>
											<option value="Tennis">Tennis</option>
											<option value="Ultimate_Frisbee">Ultimate Frisbee</option>
											<option value="Rugby">Rugby</option>
											<option value="Basketball">Basketball</option>
											<option value="Hockey">Hockey</option>			
											<br>		
										</select>
			<span class="clearfix"></span>	
	        </div>
			<div class="login-footer">
			<div class="row">
	                        <div class="col-xs-6 col-md-6 pull-center">
	                        <input class="btn btn-success" type="submit" value="Let's Play!"> 
	                           <!--  <a href="newgame.html" class="btn btn-success " ><i class="icon-star icon-white "></i> Lets Play!</a> -->
	                        </div>
	                    </div>
			
			</div>
	    </form>
		</div>
		<div class="col-md-3 column">
		<!-- Existing Game -->
			<form class="form-signin mg-btm" method="post" action="search.php">
		    	<h3 class="heading-desc pull-center">Find A Match</h3>
				<div class="main">	        
				 <label for="Sports">Sport</label> <select name="sports">
												<option style="color:gray" value="Choose a sport" selected="selected" > </option>
												<option value="Baseball">Baseball</option>
												<option value="Football">Football</option>
												<option value="Soccer">Soccer</option>
												<option value="Tennis">Tennis</option>
												<option value="Ultimate_Frisbee">Ultimate Frisbee</option>
												<option value="Rugby">Rugby</option>
												<option value="Basketball">Basketball</option>
												<option value="Hockey">Hockey</option>					
											</select>
											<br>
				<label for="zip">Zip</label><input type="text" class="form-control" id="zip_location" name="zip_location" /><br>
				<span class="clearfix"></span>	
		        </div>
				<div class="login-footer">
				<div class="row">
		                        <div class="col-xs-6 col-md-6 pull-center">
		                        <input class="btn btn-success" type="submit" value="Search"> 
		                            <!-- <a href="search.php" class="btn btn-success" ><i class="icon-star icon-white "></i> Search</a> -->
		                        </div>
		                    </div>
				
				</div>
		    </form>
		</div>
		<div class="col-md-3 column">
		</div>
	</div>


<?php include 'footer.html' ?>

</div> <!-- End body container --> 


	    <!--     <div class="container">	      
				<div class="jumbotron">
					    <div class="container">
					        <div class="pageHolder">          
					              <div class="page0">
					                <center>
					                  <img src="http://imgur.com/pUUUyeh.jpg" class="img-circle" alt="...">
					                  <br>
					                  <h4 class="footertext">Play</h4>
					                </center>
					              </div>
					              <div class="page1">
					                <center>
					                  <img src="http://imgur.com/8nTKGJT.jpg" class="img-circle" alt="...">
					                  <br>
					                  <h4 class="footertext">Connect</h4>
					                </center>
					              </div>
					            </div>            
					    </div>
							              <div class="page2">
					                <center>
					                  <img src="http://imgur.com/oQLeY3j.jpg" class="img-circle" alt="...">
					                  <br>
					                   <font color="FA7147">
					                   	<b>
					                  	<h3 class="footertext">PickUp.</h3>
					                  </b>
					             	 </font>
					                </center>
					              </div>
				 </div>      
			</div>   -->
			

	</body>
</html>