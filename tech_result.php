<?php
session_start();
$result="'".$_SESSION['res']."'";
$id="'".$_REQUEST['txtid']."'";
$name="'".$_REQUEST['txtname']."'";
$round="'"."Tech Round"."'";
$connect=mysqli_connect("localhost","root","","result");
mysqli_query($connect,"insert into values($id,$name,$result,$round)");
mysqli_close($connect);
echo "record inserted";
?>