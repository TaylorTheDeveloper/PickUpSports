
<!DOCTYPE html>
<html>

<!-- Doc Header -->
<?php include 'head.html' ?>
<!-- Doc Navigation --> 
<?php include 'navbar.html' ?>

	<body>		

	        <div class="hero-units">	      
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
			</div>


			<table style="width: 100%;">
				<tbody>
				  <tr>
				 <td style="padding: 50px; min-width:50%">
			    <div class="container">
					<div class="row">

	        	<!-- Insert --> 
						<div class="float-left offset4">          
						<form class="form-signin mg-btm">
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
				                            <a href="newgame.html" class="btn btn-success " ><i class="icon-star icon-white "></i> Lets Play!</a>
				                        </div>
				                    </div>
						
						</div>
				      </form>
					</div>
				</div>
				</div>
				</td>

				<!-- Search --> 
				<td style="padding: 0px; min-width:50%;">
				 <div class="container">
					<div class="row">
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
						<label for="zip">Zip</label><input type="text" class="form-control" id="zip_location" name="zip_location" /><br>
						<span class="clearfix"></span>	
				        </div>
						<div class="login-footer">
						<div class="row">
				                        <div class="col-xs-6 col-md-6 pull-center">
				                        <input type="submit" value="search"> 
				                          <!--   <a href="search.php" class="btn btn-success " ><i class="icon-star icon-white "></i> Search</a> -->
				                        </div>
				                    </div>
						
						</div>
				      </form>
					</div>
				</div>
			</td>
		 </tr>
	</tbody>
</table>

	       
			
			       
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="purchaseLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
					    <div class="row">
							<div class="col-md-4 col-md-offset-4 span3">
					    		<div class="panel panel-default">
								  	<div class="panel-body">
								    	<form accept-charset="UTF-8" role="form">					                    
								    	  	<div class="form-group">
								    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
								    		</div>
								    		<div class="form-group">
								    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
								    		</div>
								    		<div class="checkbox">
								    	    	<label>
								    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
								    	    	</label>
								    	    </div>								    	
								      	</form>
								    </div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>



			<hr>

<?php include 'footer.html' ?>

	</body>
</html>