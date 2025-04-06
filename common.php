<?php
function doDBConnect(){
    global $con;
    $con = new mysqli("localhost","root","","event");
    if(isset($con->connect_error)){
        die("Connect faild...".$con->connect_error."<br/>");
    }
  else {
       // echo "Connection Successful.!<br/>";    
    }
}
function doDBClose(){
    global $con;
    $con->close();
}
//function goHome(){
  //  echo "<br/><a href='home.php'>Home</a>";
//}?>