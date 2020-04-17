
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
 $alt=$_POST["alt"];
 $shortDesc=$_POST["shortDesc"];
 $editor1=$_POST["editor1"];

 $size=$_FILES["photo"]["size"];
 $error=$_FILES["photo"]["error"];
 $file_name=$_FILES["photo"]["name"];
 $file_name=time()."_"."_".'epicPlanners_'.$file_name;
 $temp_name=$_FILES["photo"]["tmp_name"];
 $folder="../../images/serviceImages/".$file_name;
 move_uploaded_file($temp_name, $folder);


 $date=date("d-m-Y");
 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
 $time=date("h:i a");
 $status=1;

$query="INSERT INTO `service`(`date`, `time`, `title`,`category`,`shortDescription`, `shortPath`, `longDescription`, `longPath`, `status`)VALUES ('$date','$time','$title','$category','$shortDesc','$file_name','$editor1','$file_name','$status')";

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
			<img src="../../gif/success_celebration_800x600.gif">
	 	</a> 
	 	
	 	
	 </center>



<?php
}
else
{
	echo "Error".mysqli_error($conn);
}
?>


