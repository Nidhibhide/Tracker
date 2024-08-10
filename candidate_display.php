
<html>
<head>
	<title></title>
	<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body>
  	<table  class="table table-dark table-striped">
  		<tr><th>Candidate ID </th><th>Full Name</th><th>Status</th><th>Qualification</th><th>View</th><th>Edit</th><th>Delete</th></tr>
<?php
$con=mysqli_connect("localhost","root","","website");
$rs=mysqli_query($con,"select candidate_id,full_name,status,qualification from candidate_info");
while($array=mysqli_fetch_array($rs))
{
	echo "<tr>";
	 echo "<td>$array[0]";
	echo "<td>$array[1]";
	 echo "<td>$array[2]";
	 echo "<td>$array[3]";
	 	echo "<td><a href=view_candidate.php?id=$array[0]>View</a>";
	 echo "<td><a href=edit_candidate.php?id=$array[0]>Edit</a>";
	echo "<td><a href=delete_candidate.php?id=$array[0]>Delete</a>";
	
}

mysqli_close($con);
?>
</table>
<div align="center">
<a href="admindashboard.html" class="btn btn-primary" >Dashboard</a></div>
</body>
</html>