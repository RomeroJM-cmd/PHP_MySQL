<?php 

include("dbconnect.php"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.css"/>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://www.datatables.net/usage/features#bFilter">
 

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
  font-size: 10px;
  border-radius: 50px;
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
    /*links inside the dropdown*/
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

 <div class="container" style="width: 10x; margin-top: 50px;">
    <div class="row d-flex justify-content-center">
        
     
        <div class="card" 
          style=" 
          border-radius: 40px;
          border: solid #000000;
          width: 100%;
          opacity: .80;">

    <div class="text-center p-3 m-5">
             <a href="#"><img class="rounded-circle" style="width: 130px; margin-top:-50px; border: solid #000000; height: 130px" src="logo.jpg"></a>
            <h1 style="font-family: times new roman; font-weight: bold;text-align: center;"><p style="color:black">  </p></h1>
            

     
    <form method="POST">
        <input type="text" class="search" name="searchdata"> <input type="submit" class="btn" name="search" value="Search">
    </form>

        <form>
        <table class="table table-stripped table-bordered" id="mydatatable" style="width: 100%;">
            <thead>
                <tr>
                    <th>Thesis Title</th>
                    <th>Authors</th>  
                    <th>Copyright Year</th>  
                    <th>Program</th>  
                    <th>Action</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_REQUEST['search'])) {
                    $searchdata = $_POST['searchdata'];
                    $result = mysqli_query($conn, "SELECT * FROM tbl_thesis WHERE thesis_id LIKE '%$searchdata%' OR thesis_title LIKE '%$searchdata%' ");
                }else{
                    $result = mysqli_query($conn, "SELECT * FROM tbl_thesis");
                }
                ?>
                <?php

                    while($rows = mysqli_fetch_assoc($result))
                    {
                ?>

                    <tr> 
                        <td> <?php echo $rows['thesis_title']; ?> </td>
                        <td> <?php echo $rows['author']; ?> </td>
                        <td> <?php echo $rows['copyright_year']; ?> </td>
                        <td> <?php echo $rows['program']; ?> </td>
                       
                        <td> 
                            <a href="display.php?id=<?php echo $rows['thesis_id']; ?>"><i class="fa fa-address-card" style="color: black; font-size: 20px; margin-left: 10px;"></i></a>
                            <a href="edit.php?id=<?php echo $rows['thesis_id']; ?>"><i class="fa fa-pencil" style="color: black; font-size: 20px; margin-left: 10px;"></i></a>    
                            <a href="del.php?id=<?php echo $rows['thesis_id']; ?>" onclick="confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash" style="color: black; font-size: 20px; margin-left: 10px;"></i></a>
                
                        
                        </td>
                    </tr>
                <?php 
                    }
                ?>

            </tbody>

            
        </table>
        </form>
    

    </div>
    <div class="col-md-13 text-center">
     <button class="btn1"><a href="advsearch.php">Try Advanced Search </a> </button>
    
    </div>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>
    

    


    <script type="text/javascript">

        $('#mydatatable').DataTable({
            
            order: [],
            
            searching: false,
           
            info: false
           
        });
    </script>
</body>
</html>