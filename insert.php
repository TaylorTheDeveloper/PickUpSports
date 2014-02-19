	<?php //Print Database
 			
 			$p_location = $_POST["Location"];
 			$p_sport = $_POST["sports"];
 			//$p_date= $_POST["Date"];
 			$p_date= "09/12/14";
 			$p_time= $_POST["time"];
 			$p_currPlayers = $_POST["currPlayers"];
 			$p_needPlayers = $_POST["needPlayers"];
 			if(isset($_POST['pubpriv']))
		   {
		    /*other variables*/
		     $radio_value = $_POST["pubpriv"];
		   }
		   else
		   {
		   	echo "not set";
		   }

 			
			//Connect
			$con=mysqli_connect("localhost:3306","root","","games");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			//Select Data
			 //The numbers in here at just random variables i put in to test the query.
			mysqli_query($con,"CALL newMatch(5, 4, '$p_location', 32304, '2014 -02 -04', '23:50:26', '$p_needPlayers', '$p_currPlayers', 1 )" );
			//Check that it returns true		
			

			mysqli_close($con);
			?>
				