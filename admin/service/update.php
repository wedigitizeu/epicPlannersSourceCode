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
 $id=$_POST['id'];
 //$category=$_POST["category"];
 

 $size=$_FILES["photo"]["size"];
 $error=$_FILES["photo"]["error"];
 $file_name=$_FILES["photo"]["name"];
 $file_name=time()."_"."_".'epicPlanners_'.$file_name;
 $temp_name=$_FILES["photo"]["tmp_name"];
 $folder="../../images/serviceImages/".$file_name;
 move_uploaded_file($temp_name, $folder);

/*Deleting Old images Starts*/
 if($file_name!="")
	{
		
		

		$sel="SELECT * FROM `service` WHERE id=$id";
		$exe=mysqli_query($conn,$sel);
		if(mysqli_num_rows($exe)==0)
		{
			echo "Error while fetching Short Desc. Image";
		}
		else
		{
			$data=mysqli_fetch_assoc($exe);
			

		}

		

		unlink("../../images/serviceImages/".$data['shortPath']);
		$query="UPDATE `service` SET `shortPath`='$file_name',longPath='$file_name' WHERE id=$id";

		if(!$obj->insertQuery($query))
	 	{
	 		echo "<center>
	 				
	 				<h2>Error while uploading Iamge</h2>

	 		</center>";
	 		echo mysqli_error($conn);
	 		
	 	}
	 	
	}

	/*Deleting old Images Ends*/


 $title=$_POST["title"];
 $alt=$_POST["alt"];
 $shortDesc=$_POST["shortDesc"];
 $editor1=$_POST["editor1"];

 $date=date("d-m-Y");
 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
 $time=date("h:i a");
 $status=$_POST['status'];

 $query="UPDATE `service` SET
  `date`='$date',
 `time`='$time',
 `title`='$title',
 `shortDescription`='$shortDesc',
 `longDescription`='$editor1',
 `status`='$status' WHERE id='$id'";
 $exe=mysqli_query($conn,$query);
 if(!$exe)
 {
 	echo "Not updated <br>";
 	echo mysqli_error($conn);
 }
 else
 {

 ?>
 	

	 <center>
	 	<br><br>
	 	<a title="Click Image to go Back" href="../serviceList.php">
			<img src="../../gif/success_celebration_800x600.gif">
	 	</a> 
	 	
	 	
	 </center>



<?php  
 }
?>



?>