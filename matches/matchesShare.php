<?php 
      $this_match_id = $matchID;
      $link = "localhost/PickupSports/matches.php?id=" . $this_match_id;
      $linkImp = "matches.php?id=" . $this_match_id;

	echo "<form accept-charset=\"UTF-8\" id=\"linkform\" class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"matches/invite_players.php\" parsley-validate ><tbody>";			   		
	echo "<tr><td><b>Share Link:</b></td></tr>"; 
	echo "<tr><td>";
	echo "<div style=\"padding: 2% 5%;\" class=\"input-group\">";
	echo "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-link\"></i></span>";
	echo "<input type=\"url\"  readonly=\"readonly\" name=\"matchlink\" id=\"matchlink\" parsley-required=\"false\"  autofocus type=\"text\" class=\"form-control\" name=\"matchlink\" value=\"". $link ."\" placeholder=\"". $link ."\">";
	echo "</div></tr></td>";

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	echo "<tr><td><b>Invite by Username(seperate with ','):</b></td></tr>";  
	echo "<tr><td>";
	echo "<div style=\"padding: 2% 5%;\" class=\"input-group\">";
	echo "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>";
	echo "<input type=\"text\" class=\"form-control\" name=\"usernames\" parsley-required=\"true\" id=\"usernames\" placeholder=\"Ex. Jimmy, Joe, Dan, Smith\" />";
	echo "<input  class=\"color green styled-button-1\" style=\"margin-top: .5%;\" type=\"submit\" value=\"Send Invite\">";
	echo "</div></tr></td>";
        } else {
//Do nothing here, because
        }



     	echo "</tbody></form> ";            
?>
