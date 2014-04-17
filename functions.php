<?php
/*
Various functions used for this project
*/
/*
Function: nameConvert
Author: Taylor Brockhoeft
Descript: converts game names to value readable by db
!!!!NOTE: Can be re-written mo' bettah if it's regex
*/
function nameConvert($val) {
    switch ($val) {
  case 'Soccer': return "soccer";
    break;
  case 'Football': return "football";
    break;
  case 'Baseball': return "baseball";
    break;
  case 'Basketball': return "basketball";
    break;
  case 'Hockey': return "hockey";
    break;
    case 'Tennis': return "tennis";
    break;
  case 'Frisbee': return "frisbee";
    break;
  default: return "frisbee";
    break;
  }
}
/*
Function: make_seed
Author: Taylor Brockhoeft
Descript: Generates a seed value for Rand
*/
function make_seed(){
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}
/*
Function: randAngle
Author: Taylor Brockhoeft
Descript: Generates a random degree value to adjust positon by
*/
function randAngle(){
	srand(make_seed());
	return rand(-359,359);
}
/*
Function: handleIMG
Author: Taylor Brockhoeft
Descript: determines which image to display for sport, defaults to generic medal
*/
function handleImg($name){
	switch ($name) {
	    case "Baseball":
	        return "img/search_icons/baseball.png";
	        break;
	    case "Basketball":
	        return "img/search_icons/basketball.png";
	        break;
	    case "Soccer":
	        return "img/search_icons/soccer.png";
	        break;
	    case "Tennis":
	        return "img/search_icons/tennis.png";
	        break;
	    case "Hockey":
	        return "img/search_icons/hockey.png";
	        break;
	    case "Ultimate_Frisbee":
	        return "img/search_icons/frisbee.png";
	        break;
	    case "Football":
	        return "img/search_icons/football.png";
	        break;
	    default:
	        return "img/search_icons/medal.png";
	        }
}
/*
Function: random_color_part; random_Color
Author: Taylor Brockhoeft
Descript: Generates a random color value (*origionaly, it genertated 3 and was used with random_color(), left the comment so you can see)
*/
function random_color_part() {
  return str_pad( dechex( mt_rand( 150, 255 ) ), 3, '0', STR_PAD_LEFT);
}
function random_color() {
  return random_color_part();
  /* return random_color_part() . random_color_part() . random_color_part()*/
}
/*
Function: handleSports
Author: Taylor Brockhoeft
Descript: Fur the userstats, this generates each individual bar graph color, shape, etc
*/
function handleSports($val,$name,$max){
$percent = ($val/$max) * 100;
if($val > 0){
  echo "<tr> <td>" . $name . "</td>";
  echo "<td><div style=\"margin: 1%; width: 99%; border: 1px solid #07ad79;border-radius: .3rem\">
  <div style=\"color: #ffffff; padding: 5px; width:" . $percent . "%; background: #" . random_color() . ";\">" . $val . "</div>
  </div></td>";
  }
}
?>