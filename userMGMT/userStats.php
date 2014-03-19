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
$result = mysqli_query($con,"SELECT * FROM gameHistory WHERE user_idnum = '$uid'" );
//Check that it returns true
if($result==false){
  echo "Master Wayne, I've failed you";
}

if(!(mysqli_fetch_array($result))){
    echo "Error Opening user Stats!";
}
$num = 1;
//Print Data by row
while($row = mysqli_fetch_array($result))
  {
    echo $baseball = $row['baseball'];
    
  //       $playerlist = $row['playerlist'];        
        // $list = explode(";", $playerlist);
        // foreach ($list as $k=>$n){ 
        //     echo "$n<br>";
        // }    

        $num++;
  }



mysqli_close($con);
?>