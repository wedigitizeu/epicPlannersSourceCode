<?php
include_once("../../db/db.php");
?>
<?php

if(isset($_POST['checkBoxLead']))
{
	$checkBoxDelete=$_POST['chk'];


	$a=implode(",", $checkBoxDelete);

	$query="UPDATE `contact` SET `status`='nolead' WHERE id in ($a)";

	$exe=mysqli_query($conn,$query);
	if($exe)
	{

		header("Location:../LeadList.php");


	}
	
}

if(isset($_POST['checkBoxDelete']))
{


	$checkBoxDelete=$_POST['chk'];
	$a=implode(",", $checkBoxDelete);
	$query="DELETE FROM `contact` WHERE id in ($a)";
	//$query="DELETE `contact` WHERE id in ($a)";

	$exe=mysqli_query($conn,$query);
	if($exe)
	{

		header("Location:../LeadList.php");


	}else{

		echo "Error in delete";
		echo mysqli_error($conn);
	}



}

?>