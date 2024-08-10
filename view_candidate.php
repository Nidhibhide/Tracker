<html>
<head>
  <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>
  <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>
  <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","website");
$x=$_GET['id'];


echo "<form action= method=post>";
$rs=mysqli_query($con,"select candidate_id,full_name,mother_name,father_name,email,status,dob,marital_status,spouse_name,nation,religion,cast,category,mother_tongue,qualification,curr_add,per_add,dip_per,10th_per,12th_per,gra_per,skills,application_date,contact_no,known_lang from candidate_info where candidate_id=$x");
echo "<h1 style=text-align:center;font-family:Constantia ;font-size: 30px;><b><font color=red>View Candidate Details</font></b></h1><br>";
$array=mysqli_fetch_array($rs);
  echo "<div class=container>
   <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fullname style=font-size: 16px>Candidate ID:</label>
          <input type=text class=form-control value=$array[0] readonly>
          
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Full Name:</label>
          <textarea class=form-control readonly rows=1 cols=1 > $array[1]</textarea>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=mothername style=font-size: 16px>Mother's Name:</label>
          <input type=text class=form-control  value=$array[2] readonly>
        </div>
      </div>  
    </div>
    <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=email style=font-size: 16px>Father Name:</label>
          <input type=email class=form-control value=$array[3] readonly>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=Contact style=font-size: 16px>Email ID:</label>
          <input type=text class=form-control value=$array[4] readonly>
        </div>
      </div>
      <div class=col-lg-4>
      <label for=dob style=font-size: 16px>Status:</label>
        <div class=form-group>
          <textarea class=form-control readonly rows=1 cols=1> $array[5]</textarea>
        </div>
      </div>
      </div>
      <div class=row>
      <div class=col-lg-4>
          <label for=maritalstatus style=font-size: 16px>Date Of Birth:</label>
          <input type=text class=form-control readonly value=$array[6] > 
      </div>";
     echo "<div class=col-lg-4 id=wifename>
        <label for=spouse style=font-size: 16px>Marital Status:</label>
        <div class=form-group>
<input type=text class=form-control readonly value=$array[7]>
        </div>
      </div>";
      if($array[8]!='')
      {
      echo"<div class=col-lg-4>
        <div class=form-group>
          <label for=nationality style=font-size: 16px>Spouse Name:</label><input type=text class=form-control  readonly value=$array[8]>    
        </div>
      </div>";
    }
      echo "</div>
       <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=religion style=font-size: 16px>Nationality:</label>
          <input type=text class=form-control readonly value=$array[9]>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Religion:</label><br>
          <input type=text class=form-control readonly value=$array[10]>
        </div>
      </div>
      <div class=form-group>
      <div class=col-lg-4>
          <label for=Category style=font-size: 16px>Cast:</label><br>
           <input type=text class=form-control readonly value=$array[11]>
        </div>
      </div>  
    </div>
    <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=religion style=font-size: 16px>Category:</label>
          <input type=text class=form-control readonly value=$array[12]>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=qualification style=font-size: 16px>Mother Tongue:</label>         
          <input type=text class=form-control readonly value=$array[13]>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=qualification style=font-size: 10px>Qualification:</label>         
          <textarea class=form-control readonly rows=1 cols=1> $array[14]</textarea>
        </div>
      </div>
      </div>
    <div class=row> 
      <div class=col-lg-6>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>Current Address:</label>
          <textarea readonly class=form-control  >$array[15]</textarea>
        </div>
      </div>  
      <div class=col-lg-6>
        <div class=form-group>
                <label for=nationality style=font-size: 16px>Permanant Address:</label><br>
        <textarea readonly class=form-control  >$array[16]</textarea>
        </div>
        </div>
        </div>  
     <div class=row>"; 
      if($array[17]!='')
      {
     echo" <div class=col-lg-3>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Diploma Percentage:</label><br>
          <input type=text class=form-control  value=$array[17] readonly>
        </div>
      </div>";
    }
      echo "<div class=col-lg-3>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>10th Percentage :</label>
          <input type=text class=form-control  value=$array[18] readonly>
        </div>
      </div>
      <div class=col-lg-3>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>12th Percentage :</label>
          <input type=text class=form-control  value=$array[19] readonly>
        </div>
    </div>";
   
    echo "<div class=col-lg-3>
        <div class=form-group>
          <label for=clgname style=font-size: 16px>Graduation Percentage</label>
          <input type=text class=form-control value=$array[20] readonly>
        </div>
      </div>";
      
    echo "</div>
    <div class=row> 
    <div class=col-lg-4>
        <div class=form-group>
          <label for=Applicationdate style=font-size: 16px>Skills :</label>
          <textarea class=form-control readonly>$array[21]</textarea>
        </div>
      </div>
      ";
      
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=nationality style=font-size: 16px>Application Date:</label><br>
         <input type=text class=form-control  value=$array[22] readonly>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Contact No:</label><br>
          <input type=text class=form-control  value=$array[23] readonly>
        </div>
      </div>
    </div>
     <div class=row> 
    <div class=col-lg-4>
        <div class=form-group>
          <label for=Applicationdate style=font-size: 16px>Known Languges :</label>
          <textarea class=form-control readonly>$array[24]</textarea>
        </div>
      </div>
      


      </div>
    </div>";
mysqli_close($con);
?>

</form>
<div align=center>
<a href=candidate_display.php class="btn btn-primary">Back</a></div>";
</body>


</html>



