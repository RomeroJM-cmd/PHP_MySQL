

<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="bg-light" style="background: url(bat.jpg);">
     <center>

 <div class="container" style="width: 80%; margin-top: 100px;">
    <div class="row d-flex justify-content-center">
        
      <div class="col-6">
        <div class="card shadow mt-2" 
          style="background-color: white; 
          border-radius: 40px;
          border: solid #000000;
          opacity: .75;">

    <div class="text-center p-3 m-5">
             <a href="#"><img class="rounded-circle" style="width: 130px; margin-top:-50px; border: solid #000000; height: 130px" src="logo.jpg"></a>
            <h1 style="font-family: Cooper Black; font-weight: bold;text-align: center;"><p style="color:black">  </p></h1>
          </div>
            
          <div class="container">
</div>

	<form method="POST" action="">
<?php
	$id=$_GET['id'];
	$result=mysqli_query($conn, "SELECT * FROM tbl_thesis WHERE thesis_id='$id' ");
	$row=mysqli_fetch_array($result);


?>
<center>

Thesis ID <input type="text" name="thesis_id" value="<?php echo $row['thesis_id'];?>" disabled>
<br>
<br>

Thesis Title <input type="text" name="thesis_title" value="<?php echo $row['thesis_title'];?>" disabled>
<br>
<br>

Category <input type="text" name="thesis_id" value="<?php echo $row['category'];?>" disabled>

<br>
<br>

Author <input type="text" name="author" value="<?php echo $row['author'];?>" disabled>
<br>
<br>

Program <input type="text" name="author" value="<?php echo $row['program'];?>" disabled>
<br>
<br>

Copyright Year <input type="text" name="copyright_year" value="<?php echo $row['copyright_year'];?>" disabled>
<br>
<br>

Thesis Adviser <input type="text" name="copyright_year" value="<?php echo $row['thesis_adviser'];?>" disabled>
<br>
<br>

Technical Critic <input type="text" name="copyright_year" value="<?php echo $row['technical_critic'];?>" disabled>
<br>
<br>

Abstract <input type="text" name="copyright_year" value="<?php echo $row['abstract'];?>" disabled>
<br>
<br>
		<button type="button" class="btn btn-light"><a href="search.php">Back</a></button>

</form>
</center>
</body>
</html>