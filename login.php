<?php
   include("config.php");
   error_reporting(E_ALL);
  ini_set('display_errors', '1');
   session_start();
   $error = "Your Login Name or Password is invalid";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT login_id,Name FROM logindetails WHERE Email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      if ($result== NULL) {
       	echo "$error";       
       }
             else{
            	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['login_id'];   
                $count = mysqli_num_rows($result);
             
             	if($count == 1) {
             	 $_SESSION['login_user'] = $myusername;      
                 header("location: services.php");
                  }else {
                   echo "$error";
               } 
       }

                      
      
   }
?>