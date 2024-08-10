<?php
$x=$_GET['id'];
$con=mysqli_connect("localhost","root","","website");
$query="delete from candidate_info where candidate_id=$x";
//echo $query;
mysqli_query($con,$query) or die("couldnt deleted in  mysql");
header("location:candidate_display.php");
mysqli_close($con);
?>