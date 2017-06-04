<?php

    include('dbconnection.php');
    
    $query = "SELECT * FROM crud1";
    
    $allValues = $conn->query($query);
    
   while($row = $allValues->fetch_assoc())
   {
       print_r($row);
   }
    
?>