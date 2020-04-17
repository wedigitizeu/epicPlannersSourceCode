<?php

include_once("../../db/db.php");

$id=$_POST["id"];



	$sel="SELECT * FROM `service` WHERE id=$id;";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "false";
		exit();
	}
	else
	{
		$data=mysqli_fetch_assoc($exe);
		unlink("../../images/serviceImages/".$data['shortPath']);
	}



$query="DELETE FROM `service` WHERE id='$id'";

	$exe=mysqli_query($conn,$query);
	if($exe)
	{

		echo 'true';
	}
	else
	{
		echo 'false';
	}



/*$query="SELECT * FROM `service` WHERE id='$id'";
$exe=mysqli_query($conn,$query);

if(mysqli_num_rows($exe)>0)
{


	$data=mysqli_fetch_assoc($exe)
	 $photoPath=$data['shortPath'];

	unlink('../../images/serviceImages'.$photoPath);
	
	
}
else
{
	echo "false";
}*/



?>





?>