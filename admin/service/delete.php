<?php

include_once("../../db/db.php");


if(isset($_POST['id']))
{

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

	$category=$data['category'];
	$query="UPDATE `category` SET `status`='0' WHERE `category`='$category'";
	$exe=mysqli_query($conn,$query);
	if(!$exe)
	{
		echo "category status not updated <br>";
		echo mysqli_error($conn);
	}


}

}else
{
	header('Location:../404/index.php');
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