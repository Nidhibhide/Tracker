<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php
  echo "<style type='text/css'>
  	<body>
  	{
  		background-color: red;
  	}
  </style>";
  ?>
  <style type='text/css'>
   .thisis
   {
    
    width: 100%;
    padding: 10px;
    height: 42px;
    margin: 5px ;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    
   }
  </style>
  <script type="text/javascript">
  	function task()
  	{
  		document.write("hello");
  	}
  </script>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;font-family: Constantia;font-size: 30px;color: red"><b>Tech Round Scheduling</b></h1>
		<br>
	<form action="insert_techschedule.php" method="post">
		<?php
		session_start();
		$x=$_GET['id'];
		$_SESSION['a']=$x;
		$con=mysqli_connect("localhost","root","","website");
$rs=mysqli_query($con,"select candidate_id,full_name,status,qualification from candidate_info where candidate_id=$x");
while($array=mysqli_fetch_array($rs))
{
echo "<div class=row>";
echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Candidate ID:</label>
          <input type=text class=form-control  value=$array[0] readonly name=txtcandidateid>
        </div>";
        echo "</div>";
        echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Full Name:</label>
          <textarea class=form-control readonly cols=1 rows=1 name=txtname>$array[1]</textarea> 
          
        </div>";
        echo "</div>";
        echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Status:</label>
          <textarea class=form-control readonly cols=1 rows=1 name=txtstatus>$array[2]</textarea> 
        </div>";
        echo "</div>";
        echo "</div>";
        echo "<div class=row>";
echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Qualification:</label><br>
          <textarea class=form-control readonly cols=1 rows=1 name=txtqua>$array[3]</textarea> 
        </div>";
        echo "</div>";

    }
        echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Tech Head Name:</label><br>";



$rs1=mysqli_query($con,"select fname,mname,lname from tech_register");
echo "<select class='thisis' name=cmb>";
while($array=mysqli_fetch_array($rs1))
{
echo "<option>$array[0] $array[1] $array[2]</option>";
}
echo "</select>";

        echo"</div>";
        echo "</div>";
        echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Time Slot:</label><br>
          <input type='time' class=form-control   name=txttime  >
        </div>";
        echo "</div>";
        echo "</div>";
        echo "<div class=row>";
        echo "<div class=col-lg-4>";
echo "<div class=form-group>
          <label for=fullname style=font-size: 16px>Date:</label>
          <input type=date class=form-control   name=txtdate>
        </div>";
        echo "</div>";
        echo "</div>";
        ?>
        <div align=center>
<input type="submit" name="btn" value="Schedule" class="btn btn-primary">&nbsp&nbsp&nbsp&nbsp<a href=tech_display.php class='btn btn-primary' >Back</a></div>";






<?php
mysqli_close($con);
?>
	
	</form>
	</div>

</body>
</html>
