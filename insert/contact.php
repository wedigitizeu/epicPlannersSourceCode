<?php
include_once("../db/db.php");

$name=($_POST['name']);
$mobile=($_POST['mobile']);
$looking=($_POST['looking']);
$location=($_POST['location']);
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date=date('d-m-Y');
$time=date("h:i a");
$email="";
$address="";
$status="nolead";

$query="INSERT INTO `contact`(`date`, `time`, `name`, `email`, `mobile`, `looking`, `location`, `address`,`status`) VALUES ('$date','$time','$name','$email','$mobile','$looking','$location','$address','$status')";
$exe=mysqli_query($conn,$query);
if($exe)
{

?>
	<script>
		$(document).ready(function()
			{
				
  					
  					$("#msg").fadeOut(12000);
					
			});
	</script>

	 <p id="msg" style='color:#dfb162;font-weight:bold;'><br>We appreciate you contacting us. One of our colleagues will get back in touch with you soon!<br>Have a great day!</p>

<?php
}
else
{
	echo "Error";
}
?>