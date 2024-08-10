<?php
session_start();
$id=$_SESSION['a'];
//echo "$id";
	$id=$_REQUEST['txtcandidateid'];
	$name="'".$_REQUEST['txtname']."'";
	$qua="'".$_REQUEST['txtqua']."'";
	$head="'".$_REQUEST['cmb']."'";
	/*$head="Rahul John Kapoor";
	$a=explode(" ",$head);
	print_r($a[0]);
	//$a1=implode(" ",$a[0]);*/
	$date="'".date('Y-m-d',strtotime($_REQUEST['txtdate']))."'";
	//echo "$date";
	$time="'".$_REQUEST['txttime']."'";
	$s="'"."Tech Round Level"."'";
	$con=mysqli_connect("localhost","root","","website");


$query="update candidate_info set status=$s where candidate_id=$id";
//echo $query;
/*echo "$array[0]";
$name1=implode(" ",$array[0]);
$name2="'".$name1."'";*/
mysqli_query($con,$query) or die("couldnt updated in  mysql");
$query1="insert into tech_schedule values($id,$name,$s,$qua,$head,$date,$time)";
/*$query1="insert into tech_schedule values($head,$name2)";
mysqli_query($con,$query1) or die("couldnt updated in  mysql");*/
mysqli_close($con);
header("location:tech_display.php");
?>