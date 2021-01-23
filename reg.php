<?php
 include("config.php");
   error_reporting(E_ALL);
  ini_set('display_errors', '1');
   session_start();   	  
    $sql= "INSERT INTO account_info (Account_type,Currency, First_name, Last_name, Area_code, Phone_number, DOB, Street_address1, Street_address2, City,Province, Country, Marital_Status, Occupation, Employer_name, Date_of_reg, Signature)
           VALUES ('".$_POST["accountType"]."','".$_POST["currencyType"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["areacode"]."','".$_POST["phoneNumber"]."','".$_POST["dob"]."','".$_POST["addr_line1"]."','".$_POST["addr_line2"]."','".$_POST["addr_city"]."','".$_POST["addr_province"]."','".$_POST["country"]."','".$_POST["maritalStatus"]."','".$_POST["occupation"]."','".$_POST["employerName"]."','".$_POST["regdate"]."','".$_POST["signh"]."')";
    if(mysqli_query($db, $sql)){
    header("location: afterreg.php");
    } else{
    echo "ERROR: Could not able to execute. " . mysqli_error($db);
}
   
  ?>