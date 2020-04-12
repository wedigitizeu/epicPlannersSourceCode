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

$query="INSERT INTO `service`(`date`, `time`, `title`, `shortDescription`, `shortPath`, `longDescription`, `longPath`, `status`) VALUES ('$date','$time','$title','$shortDesc','$path','$editor1','$path','$status')";

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

	 <p id="msg" style="color:green;" style='color:#dfb162;font-weight:bold;'><br>Service Saved Successfully..</p>

<?php
}
else
{
	echo "Error";
}
?>


