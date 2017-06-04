<?php

    include('dbconnection.php');
    
    $query = "SELECT * FROM crud1";
    
    $allValues = $conn->query($query);
    
?>

<?php
include('header.php');
?>

<div class="col-md-1"></div>
<div class="col-md-10">
    
    
<h3 style="text-align: center"> Data Station </h3><br/>

<table class="table table-bordered table-striped">
    <tr>
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Website</th>
        <th>Edit</th>
        <th>Remove</th>
   </tr>
  
   
    <?php
    
    while($row = $allValues->fetch_assoc())
    {
        echo ' <tr> 
            
                <td>'.$row['id'].'</td>
                <td>'.$row['fname'].'</td>
                <td>'.$row['lname'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['website'].'</td> 
                <td><a href="edit.php?id='.$row['id'].'" class="glyphicon glyphicon-wrench"></a></td>
               <td><a href="delete.php?id='.$row['id'].'" class="glyphicon glyphicon-remove"></a></td>
                
             </tr>';
       
    }
    
    ?>
   
   
</table>
</div>


<div class="col-md-1"></div>