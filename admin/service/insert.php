
<style type="text/css">
	body
	{
		background-color:#87CEFA;
	}
	.btn
	{
		background-color:green;
		border:none;
		padding:0.5%;
		font-weight:bold;
		color:white;
		outline: none;
	}
</style>
<?php
include_once("../../db/db.php");
 $category=$_POST["category"];
 $title=$_POST["title"];
 $path="photo";
 $alt=$_POST["alt"];
 $shortDesc=$_POST["shortDesc"];
 $editor1=$_POST["editor1"];

 $date=date("d-m-Y");
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time=date("h:i a");
$status=1;

$query="INSERT INTO `service`(`date`, `time`, `title`, `shortDescription`, `shortPath`, `longDescription`, `longPath`, `status`) VALUES
 ('$date','$time','$title','$shortDesc','$path','$editor1','$path','$status')";

$exe=mysqli_query($conn,$query);
if($exe)
{

?>
	<script>
		$(document).ready(function()
			{
				
  				$("#msg").fadeOut(8000);
					
			});
	</script>

	 <center>
	 	<br><br>
	 	<a title="Click Image to go Back" href="../service.php">
			<img src="../gif/success_celebration_800x600.gif">
	 	</a> 
	 	<!-- <h2 id="msg" style="color:green;" style='color:#dfb162;font-weight:bold;'><br>Service Saved Successfully..</h2>
	 	<a href="../service.php">
	 	 <button class="btn">Click to Back</button>
	 	 </a> -->
	 	
	 </center>



<?php
}
else
{
	echo "Error";
}
?>


