<?php
$server= 'localhost';
$usrname ='root';
$pascode = '';
$databasename= 'kcb_bank';

 $db = mysqli_connect($server,$usrname,$pascode,$databasename);
if($db->connect_error){
	die("Connection failed:". $db ->connect_error);
	echo "Connection failed";
}
?>