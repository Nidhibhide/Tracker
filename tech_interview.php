
<html>
<head>
  <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>
  <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>
  <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>
</head>
<body>
  <form method="post"  name="f1">
  <?php
$con=mysqli_connect("localhost","root","","website");
$x=$_GET['id'];
$rs=mysqli_query($con,"select candidate_id,email,qualification,skills,contact_no from candidate_info where candidate_id=$x");
$rs1=mysqli_query($con,"select date,time,name from tech_schedule where candidate_id=$x");
$array1=mysqli_fetch_array($rs1);
echo "<h1 style=text-align:center;font-family:Constantia ;font-size: 30px;><b><font color=red>Tech Round Interview</font></b></h1><br>";
$array=mysqli_fetch_array($rs);
  echo "<div class=container>
   <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fullname style=font-size: 16px>Candidate ID:</label>
          <input type=text class=form-control value=$array[0] readonly name=txtid>
          
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Full Name:</label>
          <input type=text class=form-control value=$array1[2] readonly name=txtname>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=Contact style=font-size: 16px>Email ID:</label>
          <input type=text class=form-control value=$array[1] readonly>
        </div>
      </div>
    </div>
    <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=qualification style=font-size: 10px>Qualification:</label> 
          <input type=text class=form-control value=$array[2] readonly>        
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=Applicationdate style=font-size: 16px>Skills :</label>
          <textarea class=form-control readonly>$array[3]</textarea>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Contact No:</label><br>
          <input type=text class=form-control  value=$array[4] readonly>
        </div>
      </div>
      </div>
       <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fullname style=font-size: 16px>Scheduled Date:</label>
          <input type=text class=form-control value=$array1[0] readonly>
          
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Scheduled Time:</label>
          <input type=text class=form-control value=$array1[1] readonly>
        </div>
      </div>
    </div>

    
    </div>";
mysqli_close($con);
?>
<br>
<br>
  <div align=center>
<a href=tech_schedule_display.php class="btn btn-primary">Back</a>
</div>";

</form>

</div>


</body>


</html>


