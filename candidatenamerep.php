<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:white;">
    <h2 class="text-danger" align="center">Name Wise Candidates Report</h2>
    <?php
   
    echo "<form name=form1 method=get action=  >";
    echo "<div class=form-group>";
    echo "   <div class=row>";
    echo "<div class=col-lg-2></div><div class=col-lg-4>";
        $connect=mysqli_connect("localhost","root","","website") or die("Connection failed");
        $query="select distinct(full_name) from candidate_info";
        $rs=mysqli_query($connect,$query);
        echo "<p class=text-warning><font size=5>Select Candidate Name:</font><br><br><select name=txtname class=form-control align=center>";
         
        while($array=mysqli_fetch_array($rs))
            
               echo "  <option>$array[0]</option>";
               
           echo " </select>   </p> ";
           echo "<input type=submit class=btn-primary></div>    </div>    </div></form>";
           

        $connect=mysqli_connect("localhost","root","","website") or die("connection failed");
        echo "<table class=table table-dark table-striped>";
        echo "<tr class=text-danger><th>Candidate Id<th>Full Name<th>Email ID<th>Qualification<th>Status<th>Contact no";
            if(isset($_REQUEST['txtname']))
            {
              $input="'".$_REQUEST['txtname']."'";
        $rs=mysqli_query($connect,"select candidate_id,full_name,email,qualification,status,contact_no from candidate_info where full_name=".$input."");
        while($array=mysqli_fetch_array($rs))
        {
            echo "<tr class=text-primary>";
            echo "<td>$array[0]";
            echo "<td>$array[1]";
            echo "<td>$array[2]";
            echo "<td>$array[3]";
            echo "<td>$array[4]";
            echo "<td>$array[5]";
           
        }
       }
        mysqli_close($connect);
        echo "</table>";

    ?>
    <br><br>
<div align="center">
    <p align="center"><a href="admindashboard.html" class="btn btn-primary" >Dashboard</a></p></div>
</body>
</html>
</body>
</html>