<?php
include('dbconnection.php');

include('header.php');

//include('main.php')

?>


<?php
if(isset($_POST['btn']))
{
    $fname = $_POST['fname'];
    
    $lname = $_POST['lname'];
    
    $email = $_POST['email'];
    
    $password = $_POST['password'];
    
    $website = $_POST['website'];
    
    $query = "INSERT INTO crud1 (fname,lname,email,password,website) VALUE('$fname','$lname','$email','$password','$website')";
   
    $insert = $conn->query($query);
    
    
    if($insert)
    {
        echo "Thanks for Registration";
    }
    else
    {
        echo "Please go to <a href='registration.php'> Registration</a> Page";
    }
    
}

?>
