<?php
 include("config.php");
   error_reporting(E_ALL);
  ini_set('display_errors', '1');
   session_start();
   $query = "SELECT * FROM message";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';

if ($result = $db->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Message_id"];
        $field2name = $row["Full_name"];
        $field3name = $row["Phone_number"];
        $field4name = $row["Email_address"];
        $field5name = $row["Message"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>