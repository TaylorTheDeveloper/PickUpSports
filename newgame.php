<?php include 'head.php'; ?> <!-- links and stuff, located in head.php. only base files should go in here -->

<?php include 'header.php'; ?> <!-- Header stuff, located in head.php. only base files should go in here -->

<head>
	<link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/glDatePicker.min.js"></script>
</head>

<body>

		<center>
			<br></br>
				<form action="insert.php" method="post">
				<b>Sport</b><br>
				<select name="sports">
					<option  <option style="color:gray" value="null" selected="selected"> </option>
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
				<br><b>Location</b> <br><input type="text" name="location">
				<br><b>Zip</b><br> <input type="number" name="zip">
				<br><b>Date</b> <br> <input type="text" name="date" id="date" gldp-id="mydate" />

				    <div gldp-el="mydate"
				         style="width:200px; height:200px; position:absolute; top:70px; left:100px;">
				    </div>

				    <script type="text/javascript">
				        $(window).load(function()
				        {
				            $('#date').glDatePicker();
				        });
				    </script>
			    <br>
				<br><b>Time</b><br>
				<select name="time" id="time">
					<option style="color:gray" value="null" selected="selected"> </option>
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
<!-- Only one player when game starts, this is the admin -->
<!--				<br><b>How many players do you have?</b> <br><input type="text" name="currPlayers"></br> -->
				<br><b>Players needed for a full game?</b> <br><input type="number" name="maxPlayers"></br>

				<br><b>Who can join in on the fun?</b><br>
				<input class="radio" type="radio" name="pubPriv" value="private">Invited friends only (private)<br>
				<input class="radio" type="radio" name="pubPriv" value="public">Any random joe (public) <br>
				<br>

				
				<input type="submit" value="Lets Play!" />
				</form>	

		</center>
</body>

<?php include 'footer.php'; ?> <!-- footer stuff, located in footer.php. only base files should go in here -->

</html>