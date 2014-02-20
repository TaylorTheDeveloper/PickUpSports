	<?php //Print Database
 			/* Keep this for now
 			$p_location = $_POST["location"];
 			$p_sport = $_POST["sports"];
 			$p_date= $_POST["date"];
 			$p_time= $_POST["time"];
 			$p_currPlayers = $_POST["currPlayers"];
 			$p_needPlayers = $_POST["maxPlayers"];
 			$radio_value = $_POST["pubpriv"];
 			*/
 			/*if(isset($_POST['pubpriv']))
		   {
		    //other variables
		     $radio_value = $_POST["pubpriv"];
		   }
		   else
		   {
		   	echo "not set";
		   }*/

 			$p_location = $_POST["location"];
 			$p_sport = $_POST["sports"]; //Need to decode into number, or modify database. Devs need to decide
 			$p_date= $_POST["date"];
 			$p_time= $_POST["time"];
 			$p_zip= $_POST["zip"];
 			//$p_currPlayers = $_POST["currPlayers"];
 			$p_maxPlayers = $_POST["maxPlayers"];
 			//$p_pubPriv = $_POST["pubPriv"];

			//Connect
			$con=mysqli_connect("localhost:3306","root","","games");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			 $sql="INSERT INTO matches (`match_id`, `admin_user_id`, 
			 	`match_type`, `match_location`, 
			 	`match_zip`, `match_date`, 
			 	`match_time`, `match_maxplayers`, 
			 	`match_currentplayers`, `matchp_pubpriv`) 
				VALUES ( 0, 0 ,
					1, '$_POST[location]', 
				 	'$_POST[zip]', '$_POST[date]', 
				 	'$_POST[time]','$_POST[maxPlayers]', 
				 	1, 0)"; //Only one player
			$ssqqll="INSERT INTO `matches`(`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES (0,0,0,0,0,0,0,0,0,0)";
			
			if (!mysqli_query($con,$ssqqll))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			echo "1 record added";

			mysqli_close($con);
			?>
				'$_POST[firstname]'