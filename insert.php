	<?php //Print Database
 			
 			$p_location = $_POST["Location"];
 			$p_sport = $_POST["sports"];
 			$p_time= $_POST["time"];

 			echo $p_location;
 			echo "<br>";
 			echo $p_sport;
 			echo "<br>";
 			echo $p_time;
 			echo "<br>";
			//Connect
			$con=mysqli_connect("localhost:3306","root","","games");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			//Select Data
			$result = mysqli_query($con,"CALL testSearch()" );
			//Check that it returns true
			if($result==false){
			  echo "An error occured during the insertion procedure.";
			}

			if(!(mysqli_fetch_array($result))){
				echo "Error!";
			}
			//Print Data by row
			while($row = mysqli_fetch_array($result))
			  {
			  	
			  echo $row['match_type'] . " " . $row['match_location'];
			  echo "<br>";
			  }

			mysqli_close($con);
			?>
				