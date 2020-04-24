<?php
include_once("../../db/db.php");
error_reporting(0);
?>
<?php

if(isset($_POST['checkBoxLead']))
{
	$checkBoxDelete=$_POST['chk'];

	if(count($checkBoxDelete)==0)
	{
		?>
		<script type="text/javascript">
			
			alert("Please select atleat one record to perform action");
			window.location.href="../contact-list.php"

		</script>
		<?php

		
	}
	


	$a=implode(",", $checkBoxDelete);

	$query="UPDATE `contact` SET `status`='lead' WHERE id in ($a)";

	$exe=mysqli_query($conn,$query);
	if($exe)
	{

		header("Location:../contact-list.php");


	}
	
}

if(isset($_POST['checkBoxDelete']))
{


	$checkBoxDelete=$_POST['chk'];

	if(count($checkBoxDelete)==0)
	{
		?>
		<script type="text/javascript">
			
			alert("Please select atleat one record to perform action");
			window.location.href="../contact-list.php"

		</script>
		<?php

		
	}

	

	$a=implode(",", $checkBoxDelete);
	$query="DELETE FROM `contact` WHERE id in ($a)";
	//$query="DELETE `contact` WHERE id in ($a)";

	$exe=mysqli_query($conn,$query);
	if($exe)
	{

		header("Location:../contact-list.php");


	}else{

		echo "Error in delete";
		echo mysqli_error($conn);
	}



}
?>