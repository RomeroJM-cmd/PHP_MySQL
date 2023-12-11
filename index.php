<?php
include("dbconnect.php");

$sql = mysqli_query($conn, "SELECT COUNT(*) AS num FROM tbl_thesis");
$idnum = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP + MySQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 


<html>
<head>

 <style>
.container input, select{
  margin: 10px 0 20px ;
}
.container .txtArea textarea{
  width: 97%;
  height: 100px;
  padding: 10px;
  outline: none;
  font-size: 15px;
 font-family: Cooper Black;
  border-radius: 5px;
  border: 2px solid rgb(75, 75, 75);
  border-bottom-width: 3px;
}
.container .txtArea textarea:focus,
.container .txtArea textarea:valid{
    border-color: #000000;
}
.container label{
  font-family: Cooper Black;
  font-weight: 500;
  color:  black;
  font-weight: bold;
  text-shadow: 2px 2px 3px #ffffff;
  font-size: 18px;
}

.container .tinp input{
  height: 40px;
  width: 70%;
  outline: none;
  font-size: 15px;
 font-family: Cooper Black;
  border-radius: 5px;
  border: 2px solid rgb(75, 75, 75);
  border-bottom-width: 3px;
}
.container .tinp input:focus,
.container .tinp input:valid{
    border-color: #000000;
}

textarea{
  padding:  70px;
  width: 50px;
}
.container .choice select{
  height: 50px;
  width: 70%;
  padding: 10px;
  outline: none;
  font-size: 15px;
  cursor: pointer;
 font-family: Cooper Black;
  border-radius: 5px;
  border: 2px solid rgb(75, 75, 75);
  border-bottom-width: 3px;
}
.container .choice select:focus,
.container .choice select:valid{
    border-color: #000000;
}
.container .submitButton{
  margin-top: 30px;
  margin-bottom: 0;
  text-align: center;
  height: 40px;
  width: 101%;
  border-radius: 5px;
  border: none;
  color: #ffb3ff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 2px;
  cursor: pointer;
  transition: all 0.5s ease;
  background: #ffb3ff;
}

.container .gender-details{
  margin-bottom: 20px;
}
.container .category{
  display: flex;
  margin: 14px 50px 10px 30px;
  justify-content: space-between;
}
.container .category label{
  font-size: 15px;
 font-family: Cooper Black;
  font-weight: 600;
  display: flex;
  align-items: center;
  cursor: pointer;
}
.container .category label .dot{
  height: 10px;
  width: 10px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.5s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two{
  background: #005f18;
  border-color: #d9d9d9;
}
.container input[type="radio"]{
  display: none;
}
.dropbtn{
  background-color: #000000;
  border: none;
  padding: 10px 10px 7px 10px;
  border-radius: 5px;
  margin: 20px 0 0 20px;
  transition: all 0.5s ease;
}
.choice{
  position: relative;
  display: inline-block;
  cursor: pointer;
  transition: all 0.5s ease;
}
.dropbtn .icon{
  height: 20px;
  width: 20px;
  cursor: pointer;
}
.nav .bot1 {
  float: left;
  align-items: left;
}
.choice-content{
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
  margin: 5px 0 0 20px;
  cursor: pointer;
  transition: all 0.5s ease;
}
.choice-content a{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
 font-family: Cooper Black;
  transition: all 0.5s ease;
}
.choice-content a:hover {
  background-color: #ffb3ff;
  border-radius: 10px;
}  
.choice:hover .choice-content{
  display: block;
  transition: all 0.5s ease;
}  
button{
  height: 10%;
  width: 10%;
  border-radius: 15px;
}
button a{
  color: black;
  text-decoration: none;
}
.choice:hover .dropbtn {
  background-color: #000000;
}




.dropbtn{
        background-color: white;
        color: black;
        padding: 16px;
        width: 70%;
        font-size: 16px;
        border: none;
    }   
    
    .dropdown{
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content{
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0, 0.2);
        z-index: 1;
    }
    
    .dropdown-content a{
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content a:hover{
        background-color: black;
    }
    
    .dropdown:hover .dropdown-content{
        display: block;
    }
    
    .dropdown:hover .dropbtn{
        background-color: #aqua;
    }

</style>

<title>Form</title>

 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dropdown</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
      
    
    <div class="dropdown">
        <button class="dropbtn"><img src="hom.png" style="width: 25px; height: 25px;"></button>
        <div class="dropdown-content">
            <a href="index.php">Home</a>
            <a href="search.php">Thesis List</a>
            <a href="advsearch.php">Advanced Search</a>
        </div>
    </div>

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


<form method="POST">

<label>Thesis ID </label>
      <div>
        <input type="text" name="thesis_id1" value="<?php echo $idnum['num'] + 1000; ?>" disabled>
        <input type="hidden" name="thesis_id" value="<?php echo $idnum['num'] + 1000; ?>"></td>
      </div>
  


<div class="tinp">
<label>Thesis Title </label><input type="text" name="thesis_title">


<div class="choice">
<label>Category </label><select name="category" required>
                    <option> </option>
                    <option>Computer and Architecture</option>
                    <option>Intelligent Systems</option>
                    <option>Software, Securit, and Data Science</option>
                    <option>Information and Network Systems Management</option>
                    <option>Multimedia Systems</option>
                    <option>Web and Mobile Computing</option>
           </select>


<div class="tinp">
<label>Author </label><input type="text" name="author">


<div class="tin4">
<label>Program </label><select name="program" required>
                    <option> </option>
                    <option>BS Computer Science</option>
                    <option>BS Information Technology</option>
         </select>

<div class="tinp">
<label>Copyright Year </label><input type="text" name="copyright_year">


<div class="choice">
<label>Thesis Adviser </label><select name="thesis_adviser" required>
                    <option> </option>
                    <option>AJ Almarez</option>
                    <option>JV Aves</option>
                    <option>AE Bihis</option>
                    <option>CB Carandang</option>
                    <option>VG Coronado</option>
                    <option>MC Cruzate</option>
                    <option>SE Daez</option>
                    <option>JR Ersando</option>
                    <option>JC Lontoc</option>
                    <option>AE Malicsi</option>
                    <option>RL Mojica</option>
                    <option>JM Peji</option>
                    <option>MR Perena</option>
                    <option>GG Perey</option>
                    <option>EF Ramos</option>
                    <option>MM Sy</option>
                    <option>RL Villacarlos</option>
                  </select>


<div class="choice">
<label>Technical Critic </label><select name="technical_critic" required>
                    <option> </option>
                    <option>MC Angcaya</option>
                    <option>MN Aquino</option>
                    <option>J Baculod</option>
                    <option>JR Buhain</option>
                    <option>A Buri</option>
                    <option>E Cerezo</option>
                    <option>K Lucas</option>
                    <option>J Malacas</option>
                    <option>J Polistico</option>
                    <option>J Ricarte</option>
                    <option>RO Rodriguez</option>
                    <option>LV Tamayo</option>
                  </select><br>


<label style="margin-bottom: 20px;"> Abstract <textarea name="abstract" style="width: 50%; height: 40%;"></textarea>


<input type="submit" value="Add Record" name="save"> <input type="reset" value="Clear">
<br>
<br>
</form>
</center>
<?php
if (isset($_POST['save'])) {
     # code...
     $thesis_title=$_POST['thesis_title'];
     $category=$_POST['category'];
     $author=$_POST['author'];
     $program=$_POST['program'];
     $copyright_year=$_POST['copyright_year'];
     $thesis_adviser=$_POST['thesis_adviser'];
     $technical_critic=$_POST['technical_critic'];
     $abstract=$_POST['abstract'];
     mysqli_query($conn,"INSERT INTO tbl_thesis (thesis_title, category, author, program, copyright_year, thesis_adviser, technical_critic, abstract) VALUES ('$thesis_title','$category', '$author', '$program', '$copyright_year', '$thesis_adviser', '$technical_critic', '$abstract')");
?>
<script type="text/javascript">
     alert('Record Saved!');
     window.location="index.php";
</script>
<?php
     }
     
?>
</body>
</html>