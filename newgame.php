
<?php
    $name1 = $_POST['sportsValue']; 
    $_SESSION['newgame'] = false;
 ?>

<!DOCTYPE html>
<html lang="en">




<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- swap for margin later -->




<div class="container">
	<div class="row clearfix" >
		  <div class="panel-heading">
                    <br><br>
                </div>     
		<div class="col-md-4 column">
			<br><br><br>
			<img src="img/search_icons/tennisball.png" />
		</div>

		<div class="col-md-4 column well">
			<form role="form" class="form-horizontal" method="post" action="insert.php" parsley-validate >

				<div class="form-group" >
					 <label for="sportInput" class="col-md-3 control-label">
					 	<font color="FA7147">
					 		Sport
					 	</font>
					 </label>
					  <div class="col-md-9">
                       <select class="form-control" name="sports">
                            <option value="Baseball"<?php if($name1 == "Baseball"){ echo ' selected="selected"'; }?>> Baseball</option>
							<option value="Football" <?php if($name1 == "Football"){ echo ' selected="selected"'; }?>> Football</option>
							<option value="Soccer"<?php if($name1 == "Soccer"){ echo ' selected="selected"'; }?>> Soccer</option>
							<option value="Tennis" <?php if($name1 == "Tennis"){ echo ' selected="selected"'; }?>> Tennis</option>
							<option value="Ultimate_Frisbee"<?php if($name1 == "Ultimate_Frisbee"){ echo ' selected="selected"'; }?>> Ultimate Frisbee</option>
							<option value="Rugby"<?php if($name1 == "Rugby"){ echo ' selected="selected"'; }?>> Rugby</option>
							<option value="Basketball"<?php if($name1 == "Basketball"){ echo ' selected="selected"'; }?>> Basketball</option>
							<option value="Hockey"<?php if($name1 == "Hockey"){ echo ' selected="selected"'; }?>> Hockey</option>   
                        </select>	  
                    </div>
				</div>

				<div class="form-group">
					 <label for="locationInput" class="col-md-3 control-label">
					 	<font color="FA7147">
					 		Location
					 	</font>
					 	</label>
					  <div class="col-md-9">
					  	<input type="text" class="form-control" parsley-required="true" id="exampleInputPassword1" placeholder="Location" />
					  </div>
				</div>

				<div class="form-group">
				    <label for="zipInput" class="col-md-3 control-label">
						<font color="FA7147">
					 		Zip
					 	</font>
				    </label>  
				 	<div class="col-md-9">
	                   <input type="digits" class="form-control" name="zip" parsley-required="true" parsley-minlength="5" parsley-maxlength="5" placeholder="Zip Code">
					</div>
				</div>

				<div class = "form-group">
				    <script>
						  $(function() {
						    $( "#datepicker" ).datepicker();
						  });
					</script>

					<label for="datepicker" class="col-md-3 control-label">
						<font color="FA7147">
					 		Date
					 	</font>
					</label>
					 <div class="col-md-9">
						<input type="text" class="form-control" id="datepicker" placeholder="Date" parsley-required="true" >
					  </div>

                </div>



 				<div class="form-group">
					<label for="zipInput" class="col-md-3 control-label">
						<font color="FA7147">
					 		Time
					 	</font>
					</label>              
				  <div class="col-md-9">    
					<select class="form-control" name="time" parsley-required="true">
					<option style="color:gray" value="" selected="selected" > </option>
					<option value="5:00 AM">5:00 AM</option>
					<option value="5:15 AM">5:15 AM</option>
					<option value="5:30 AM">5:30 AM</option>
					<option value="5:45 AM">5:45 AM</option>
					
					<option value="6:00 AM">6:00 AM</option>
					<option value="6:15 AM">6:15 AM</option>
					<option value="6:30 AM">6:30 AM</option>
					<option value="6:45 AM">6:45 AM</option>
					
					<option value="7:00 AM">7:00 AM</option>
					<option value="7:15 AM">7:15 AM</option>
					<option value="7:30 AM">7:30 AM</option>
					<option value="7:45 AM">7:45 AM</option>
					
					<option value="8:00 AM">8:00 AM</option>
					<option value="8:15 AM">8:15 AM</option>
					<option value="8:30 AM">8:30 AM</option>
					<option value="8:45 AM">8:45 AM</option>
					
					<option value="9:00 AM">9:00 AM</option>
					<option value="9:15 AM">9:15 AM</option>
					<option value="9:30 AM">9:30 AM</option>
					<option value="9:45 AM">9:45 AM</option>
					
					<option value="10:00 AM">10:00 AM</option>
					<option value="10:15 AM">10:15 AM</option>
					<option value="10:30 AM">10:30 AM</option>
					<option value="10:45 AM">10:45 AM</option>
					
					<option value="11:00 AM">11:00 AM</option>
					<option value="11:15 AM">11:15 AM</option>
					<option value="11:30 AM">11:30 AM</option>
					<option value="11:45 AM">11:45 AM</option>
					
					<option value="12:00 PM">12:00 PM</option>
					<option value="12:15 PM">12:15 PM</option>
					<option value="12:30 PM">12:30 PM</option>
					<option value="12:45 PM">12:45 PM</option>
					
					<option value="1:00 PM">1:00 PM</option>
					<option value="1:15 PM">1:15 PM</option>
					<option value="1:30 PM">1:30 PM</option>
					<option value="1:45 PM">1:45 PM</option>
					
					<option value="2:00 PM">2:00 PM</option>
					<option value="2:15 PM">2:15 PM</option>
					<option value="2:30 PM">2:30 PM</option>
					<option value="2:45 PM">2:45 PM</option>
					
					<option value="3:00 PM">3:00 PM</option>
					<option value="3:15 PM">3:15 PM</option>
					<option value="3:30 PM">3:30 PM</option>
					<option value="3:45 PM">3:45 PM</option>
					
					<option value="4:00 PM">4:00 PM</option>
					<option value="4:15 PM">4:15 PM</option>
					<option value="4:30 PM">4:30 PM</option>
					<option value="4:45 PM">4:45 PM</option>
					
					<option value="5:00 PM">5:00 PM</option>
					<option value="5:15 PM">5:15 PM</option>
					<option value="5:30 PM">5:30 PM</option>
					<option value="5:45 PM">5:45 PM</option>
					
					<option value="6:00 PM">6:00 PM</option>
					<option value="6:15 PM">6:15 PM</option>
					<option value="6:30 PM">6:30 PM</option>
					<option value="6:45 PM">6:45 PM</option>
					
					<option value="7:00 PM">7:00 PM</option>
					<option value="7:15 PM">7:15 PM</option>
					<option value="7:30 PM">7:30 PM</option>
					<option value="7:45 PM">7:45 PM</option>
					
					<option value="8:00 PM">8:00 PM</option>
					<option value="8:15 PM">8:15 PM</option>
					<option value="8:30 PM">8:30 PM</option>
					<option value="8:45 PM">8:45 PM</option>
					
					<option value="9:00 PM">9:00 PM</option>
					<option value="9:15 PM">9:15 PM</option>
					<option value="9:30 PM">9:30 PM</option>
					<option value="9:45 PM">9:45 PM</option>
					
					<option value="10:00 PM">10:00 PM</option>
					<option value="10:15 PM">10:15 PM</option>
					<option value="10:30 PM">10:30 PM</option>
					<option value="10:45 PM">10:45 PM</option>
					
					<option value="11:00 PM">11:00 PM</option>
					<option value="11:15 PM">11:15 PM</option>
					<option value="11:30 PM">11:30 PM</option>
					<option value="11:45 PM">11:45 PM</option>
				</select><br>                 
				</div>
			</div>
			<center>
			<div class="form-group">
				<label for="locationInput" >
						<font color="FA7147">
					 		Who Can Join In On The Fun?
					 	</font>
				</label>
				<div >
				<div class="form-group">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				    Any Random Joe (Public)
				  </label>
				</div>
				<div class="form-group">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				    Invited Friends Only (Private)
				  </label>


 				<div style="margin-top:10%" class="form-group">
				  <div class="col-sm-12 controls">                                       
                         <input class="btn btn-success" type="submit" value="Lets Play!"> 
                  </div>
				</div>
			</div>
			</div>
            </div>
            </center>
				
			</form>
		</div>
		<div class="col-md-4 column">
			<br><br>
			<img src="img/search_icons/racket.png" />
		</div>

	</div>
</div>



<?php include 'footer.html' ?>
</div><!-- /.container -->

 

  
</body>
</html>
