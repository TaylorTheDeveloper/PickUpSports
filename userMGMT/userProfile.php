 <?php //Query Database
$uid = $_SESSION['user_idnum'];
//Connect
$con=mysqli_connect("localhost:3306","root","","games");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Select Data
$result = mysqli_query($con,"SELECT * FROM users WHERE user_idnum = '$uid'" );
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}
echo "<tr><td><b>General:</b></td><td></td></tr>";
while($row = mysqli_fetch_array($result))
  {
   echo "<tr><td>Username</td><td>" . $row['username'] . "</td></tr>"; 
   echo "<tr><td>Name</td><td>" . $row['first_name'] ." ". $row['last_name'] .  "</td></tr>"; 
   echo "<tr><td>Email</td><td>" . $row['email'] . "</td></tr>"; 
   echo "<tr><td>Zip</td><td>" . $row['zip'] . "</td></tr>"; 
   echo "<tr><td>Favorite Sport</td><td>" . $row['favSport'] . "</td></tr>";    
   echo "<tr><td>Delete Account</td>";
     echo "<td>";
 echo "<form accept-charset=\"UTF-8\" id=\"linkform\" class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"confirm_delete_account.php\" parsley-validate >";           
   echo "<input  class=\"color green styled-button-1\" style=\"padding: -1%;\" type=\"submit\" value=\"Delete Account :(\"></form>";
   echo "</td></tr>"; 
  }
    mysqli_close($con);
?>