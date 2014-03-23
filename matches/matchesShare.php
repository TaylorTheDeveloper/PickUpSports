<?php //Query Database
             //Handle Sports Value
              $uid = $_SESSION['user_idnum'];
              //Connect
              //Select Data
              echo "<tbody><tbody>";
              $this_match_id = $matchID;
              $link = "localhost/PickupSports/matches.php?id=" . $this_match_id;

              
			//echo "<a href=\" ". $link ."\">" . $link . "</a>";

			echo "<form accept-charset=\"UTF-8\" id=\"linkform\" class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"#\" parsley-validate ><tbody><tr><td>";
			echo "<div style=\"padding: 2% 20%;\" class=\"input-group\">";
			echo "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-share\"></i></span>";
			echo "<input type=\"url\"  readonly=\"readonly\" id=\"matchlink\" parsley-required=\"false\"  autofocus type=\"text\" class=\"form-control\" name=\"matchlink\" value=\"". $link ."\" placeholder=\"". $link ."\">";
			echo "<tr><td><center><button class=\"btn btn-info\" onClick=\"ShowClipBoardContent();\" >Copy link to clipboard!</button></center></td></tr>";                               
			echo "</div></td></tr>";
			echo "</tbody></form> ";
              //echo "<tr><td>share link</td><td>";
              //echo "<input type=\"text\" name=\"fullname\" value=\"" . $link . "\" required /></td></tr>"; 

            
?>

