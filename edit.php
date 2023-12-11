<?php
include("dbconnect.php");
?>

<html>
<head>
<?php

$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM tbl_thesis WHERE thesis_id = '$id'");
$row=mysqli_fetch_array($result);
?>
<title>Learning PHP</title>

               
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

<center>
<form method="POST" action="">
Thesis ID <input type="text" name="thesis_id" value="<?php echo $row['thesis_id']; ?>" disabled><br><br>
Thesis Title <input type="text" name="thesis_title" value="<?php echo $row['thesis_title'];?>"><br><br>
Author <input type="text" name="author" value="<?php echo $row['author'];?>"><br><br>
Copyright Year <input type="text" name="copyright_year" value="<?php echo $row['copyright_year'];?>"><br><br>
Program
		<select name="program" required> 
                    <option hidden selected><?php echo $row['program']; ?> </option><br><br>
                    <option>BS Computer Science</option><br><br>
                    <option>BS Information Technology</option><br><br>
         </select>


</th>
		


<center>
<input type="hidden" name="thesis_id" value="<?php echo $row['thesis_id'];?>"><br>
<input type="submit" value="Update" name="update"> <input type="reset" value="Reset"><button type="button" class="btn btn-light"><a href="search.php">Back</a></button></center>
<?php



    
        if (isset($_POST['update'])){
          $thesis_id= $_POST["thesis_id"];
          $title = $_POST["thesis_title"];
         
          $author = $_POST["author"];
          $program = $_POST["program"];
          $copyright_year = $_POST["copyright_year"];
         
          mysqli_query($conn,"UPDATE tbl_thesis SET thesis_title='$title', author='$author', copyright_year='$copyright_year', program='$program' WHERE thesis_id='$thesis_id'");

          ?>
          <script type="text/javascript">
              	alert("Successfully Updated");
				window.location="search.php";

          </script>
          <?php
      }
     

?>
</form>
</center>

</body>
</html>