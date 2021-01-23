<?php
 include("config.php");
   error_reporting(E_ALL);
  ini_set('display_errors', '1');
   session_start();   	  
    $sql= "INSERT INTO message (Full_name, Phone_number, Email_address, Message)
           VALUES ('".$_POST["fullname"]."','".$_POST["phone_no"]."','".$_POST["emailAddress"]."','".$_POST["usermessage"]."')";
    if(mysqli_query($db, $sql)){
    echo "Message sent successfully. Thank you for your feedback";
    header("location: sendmsgfeedback.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
   
  ?>