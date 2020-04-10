<?php
include_once("../db/db.php");
$id=$_POST['id'];
$query="UPDATE `contact` SET `status`='lead' WHERE id=$id";
$exe=mysqli_query($conn,$query);
if($exe)
{
	echo 'true';

}
else
{
	echo 'false';
}
?>