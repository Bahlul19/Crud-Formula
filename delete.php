<?php

include('dbconnection.php');

$id = $_GET['id'];

$query = "DELETE FROM crud1 WHERE id=".$id;

$delete  = $conn->query($query);

var_dump($delete);

?>


<?php

include('header.php');
?>
<div class="col-md-4"></div>
<div class="col-md-4"> Data Deleted Successfully </div>
<div class="col-md-4"></div>