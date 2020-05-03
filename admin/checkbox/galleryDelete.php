<?php
include_once("../../db/db.php");


if(isset($_POST['checkBoxDelete']))
{


	$checkBoxDelete=$_POST['chk'];
	$a=implode(",", $checkBoxDelete);

	if(count($checkBoxDelete)==0)
	{
		?>
		<script type="text/javascript">
			
			alert("Please select atleat one record to perform action");
			window.location.href="../galleryDelete.php"

		</script>
		<?php
	}


	for($i=0;$i<count($checkBoxDelete);$i++)
	{
		$del_id = $checkBoxDelete[$i]; 

		$query="SELECT * FROM `gallery` WHERE id=$del_id";
		$exe=mysqli_query($conn,$query);
		if($exe)
		{
			if(mysqli_num_rows($exe)>0)
			{

				$data=mysqli_fetch_assoc($exe);
				unlink("../../images/galleryImages/".$data['name']);
				header("Location:../galleryDelete.php");

				$deletQuery="DELETE FROM `gallery` WHERE id='$del_id'";
				$execute=mysqli_query($conn,$deletQuery);
				if(!$execute)
				{
					echo "Error while deleting record";
				}


			}else{
				echo "Zero Images found";
			}

		}else{
				echo "Error in fetching Images";
				echo mysqli_error($conn);
			}
	}
	echo "Last I value ".$i;
	echo "For each loop";

}

?>