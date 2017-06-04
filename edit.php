<?php

include('dbconnection.php');

$id = $_GET['id'];

$query = "SELECT * FROM crud1 WHERE id=".$id;

$update = $conn->query($query);

$pullUp = $update->fetch_assoc();


if(isset($_POST['btn']))
{
     $fname = $_POST['fname'];
    
    $lname = $_POST['lname'];
    
    $email = $_POST['email'];
    
    $password = $_POST['password'];
    
    $website = $_POST['website'];
    
    $query = "UPDATE crud1 SET fname = '".$fname."',lname = '".$lname."',email = '".$email."', password = '".$password."', 
           website = '".$website."' WHERE id= ".$id;
    
    $update2 = $conn->query($query);
}


?>
<?php

include('header.php');
?>


<div class="col-md-4"></div>
<div class="col-md-4">

    <h3> Update Your Information </h3>

    <form  method="post" enctype="multipart/form-data">


        <div class="form-group">
            First Name <input type="text" name="fname" class="form-control" value="<?= $pullUp['fname'] ?>">
        </div>

        <div class="form-group">
            Last Name <input type="text" name="lname" class="form-control" value="<?= $pullUp['lname'] ?>" >
        </div>

        <div class="form-group">
            Email <input type="text" name="email" class="form-control"  value="<?= $pullUp['email'] ?>" >
        </div>

        <div class="form-group">
            Password <input type="password" name="password" class="form-control" value="<?= $pullUp['password'] ?>" >
        </div>

        <div class="form-group">
            Website<input type="text" name="website" class="form-control"  value="<?= $pullUp['website'] ?>" >
        </div>
        <button type="submit" name="btn" class="btn btn-info">Update</button>

    </form>

</div>
<div class="col-md-4"></div>

