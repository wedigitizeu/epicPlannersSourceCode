
<?php
	session_start();
	include_once("../../db/db.php");
	$uname=$_SESSION["uname"];
	$date=date("d-m-Y");
 	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
 	$time=date("h:i a");
 	

 	$query="INSERT INTO `log`(`date`, `time`, `name`, `desciption`) VALUES ('$date','$time','$uname',
 	'$logDescription')";
 	$exe=mysqli_query($conn,$query);
	 if(!$exe)
	 {
	 	
	 	die("Error in log query<br>");
	 	echo mysqli_error($conn);
	 }

?>
