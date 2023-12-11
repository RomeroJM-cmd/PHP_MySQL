<?php
include("dbconnect.php");
$conn=mysqli_connect("localhost","root","","itec106");
$id=$_GET['id']; //ilalagay mo dito yong var na gamit sa href mo sa may icon, line45 sa list.php
mysqli_query($conn,"DELETE FROM tbl_thesis WHERE thesis_id='$id'");
?>
<script type="text/javascript">
alert('Record Deleted!');
window.location="search.php";
</script>