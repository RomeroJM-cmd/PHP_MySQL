<?php
include("dbconnect.php");
?>
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
  font-weight: 500px;
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


<title>adv search</title>
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


<div class="choice">
<label>Category <select name="category" required></label>
                    <option> </option>
                    <option>Computer and Architecture</option>
                    <option>Intelligent Systems</option>
                    <option>Software, Securit, and Data Science</option>
                    <option>Information and Network Systems Management</option>
                    <option>Multimedia Systems</option>
                    <option>Web and Mobile Computing</option>
           </select>
<br>
<br>


<div class="choice">
<label>Program <select name="program" required></label>
                    <option> </option>
                    <option>BS Computer Science</option>
                    <option>BS Information Technology</option>
         </select>
<br>
<br>


<div class="choice">
<label>Thesis Adviser <select name="thesis_adviser" required></label> 
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

<br>
<br>



<input type="submit" value="Advance Search" name="search"> 
<br>
<br>


</form>
<?php
if (isset($_REQUEST['search'])) {
     $category=$_POST['category'];
     $program=$_POST['program'];
     $thesis_adviser=$_POST['thesis_adviser'];
    

?>
<table width="80%" border="1" style="border-collapse:collapse;">
          
          

          <tr>

          <th width="30%">Thesis Title</th>
          <th width="25%">Program</th>
          <th width="15%">Category</th>
          <th width="20%">Copyright year</th>
          <th>Thesis Adviser</th>
          </tr>
          

                                <?php
                                    $query = "SELECT * FROM tbl_thesis WHERE category ='$category' AND program ='$program' AND thesis_adviser ='$thesis_adviser' ";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) 
                                    {

                                        while($row = mysqli_fetch_assoc($result))
                                        { 
                                ?>
                                            <tr>
                                                <td> <?php echo $row['thesis_title']; ?> </td>
                                                <td> <?php echo $row['program']; ?> </td>
                                                <td> <?php echo $row['category']; ?> </td>
                                                <td> <?php echo $row['copyright_year']; ?></td>
                                                <td> <?php echo $row['thesis_adviser']; ?></td>

                                            <tr>

                            </tbody>
                                        <?php
                                        } 
                                }
                }
           
                ?>   








         </table>

</center>

</body>
</html>