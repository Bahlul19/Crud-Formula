<?php
include('dbconnection.php');

include('header.php');

//include('main.php')
?>


<div class="col-md-4"></div>
<div class="col-md-4">

    <h3>Please Fill Up Form</h3>

    <form action="process.php" method="post" enctype="multipart/form-data">


        <div class="form-group">
            First Name <input type="text" name="fname" class="form-control">
        </div>

        <div class="form-group">
            Last Name <input type="text" name="lname" class="form-control">
        </div>

        <div class="form-group">
            Email <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            Password <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            Website<input type="text" name="website" class="form-control">
        </div>
        <button type="submit" name="btn" class="btn btn-success">Submit</button>

    </form>

</div>
<div class="col-md-4"></div>
