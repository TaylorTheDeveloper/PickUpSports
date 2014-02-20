	<?php //Print Database
 			
 			$p_location = $_POST["Location"];
 			$p_sport = $_POST["sports"];
 			$p_date= $_POST["date"];
 			$p_time= $_POST["time"];
 			$p_currPlayers = $_POST["currPlayers"];
 			$p_needPlayers = $_POST["needPlayers"];
 			$radio_value = $_POST["pubpriv"];
 			/*if(isset($_POST['pubpriv']))
		   {
		    //other variables
		     $radio_value = $_POST["pubpriv"];
		   }
		   else
		   {
		   	echo "not set";
		   }*/

 			
			//Connect
			$con=mysqli_connect("localhost:3306","root","","games");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			 $sql="INSERT INTO `matches`(`admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES ( 0 ,[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])";

			
			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			echo "1 record added";

			mysqli_close($con);
			?>
				