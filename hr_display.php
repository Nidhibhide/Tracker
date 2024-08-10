
<html>
<head>
	<title></title>
	<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body>
  	<table  class="table table-dark table-striped">
  		<tr><th>Candidate ID </th><th>Full Name</th><th>Status</th><th>Qualification</th><th>View</th></tr>
<?php
$con=mysqli_connect("localhost","root","","website");
$rs=mysqli_query($con,"select candidate_id,full_name,status,qualification from candidate_info where status='Tech Round Level' and candidate_id IN (select candidate_id from result where score='Accepted')");
while($array=mysqli_fetch_array($rs))
{
	echo "<tr>";
	 echo "<td>$array[0]";
	echo "<td>$array[1]";
	 echo "<td>$array[2]";
	 echo "<td>$array[3]";
	 	echo "<td><a href=viewhr_candidate.php?id=$array[0]>View more</a>";	
}

mysqli_close($con);
?>
</table>
<div align="center">
<a href="admindashboard.html" class="btn btn-primary" >Dashboard</a></div>
</body>
</html>