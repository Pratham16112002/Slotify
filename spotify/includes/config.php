<?php
 ob_start();
 session_start();
 $timezone = date_default_timezone_set("Asia/Calcutta");
 
// Creating a connection
 $con = mysqli_connect('localhost','root','','Spotify');
 if(mysqli_connect_errno()){
     echo "FAILED TO CONNECT TO SERVER".mysqli_connect_errno();
 }
 

?>  