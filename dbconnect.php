<!--
JOHN MARK O. ROMERO

-->

<?php
//dbconnnect.php
$conn = mysqli_connect("localhost","root","");
if(!$conn){
	die("Cannot connect" . mysqli_error());
}
mysqli_select_db($conn, "itec106") or die("cannot connect");
?>
