
<html>
<head>
	<title></title>
	<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body>
  	<table  class="table table-dark table-striped">
  		<tr><th>Candidate ID </th><th>Full Name</th><th>Status</th><th>Qualification</th><th>View</th><th>Accept</th><th>Reject</th></tr>
<?php
session_start();
$user="'".$_SESSION['username']."'";
$con=mysqli_connect("localhost","root","","website");

$rs1=mysqli_query($con,"select fname,mname,lname from hr_register where username=".$user."");
while($array=mysqli_fetch_array($rs1))
{
	$val=$array[0]." ".$array[1]." ".$array[2];
}
mysqli_close($con);
$con1=mysqli_connect("localhost","root","","website");
$val1="'".$val."'";


$rs=mysqli_query($con1,"
select candidate_id,full_name,status,qualification from candidate_info where candidate_id IN (select candidate_id from hr_schedule where hr_head=".$val1." and status='HR Round Level')");
while($array=mysqli_fetch_array($rs))
{
	echo "<tr>";
	 echo "<td>$array[0]";
	echo "<td>$array[1]";
	 echo "<td>$array[2]";
	 echo "<td>$array[3]";
	 echo "<td><a href=hr_interview.php?id=$array[0]>View more</a>";	
	 echo "<td><a href=hr_accept.php?id=$array[0]>Accept</a>";	
	 	echo "<td><a href=hr_reject.php?id=$array[0]>Reject</a>";
}
$_SESSION['hr_head']=$val1;
mysqli_close($con1);
?>
</table>
<div align="center">
<a href="techdashboard.html" class="btn btn-primary" >Dashboard</a></div>
</body>
</html>