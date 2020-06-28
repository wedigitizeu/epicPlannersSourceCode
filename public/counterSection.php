<?php 
include_once("public/head.php");
/* For Displaying coffee with clients*/
$query="SELECT * FROM `contact`";
$exe=mysqli_query($conn,$query);
$totalContacts=mysqli_num_rows($exe)+25;
$query="SELECT * FROM `contact` WHERE status='lead'";
$exe=mysqli_query($conn,$query);
$totalLeads=mysqli_num_rows($exe)+15;

if($totalContacts == 0)
{
	$totalContacts =$totalLeads;
}
?>
<section class="counter-section style-two">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="200" data-stop="4">0</span> Month
								</div>
								<h4 class="counter-title">Working Since</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="<?php echo $totalContacts; ?>"></span>+
								</div>
								<h4 class="counter-title">Coffee with Client</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="<?php echo $totalLeads; ?>">0</span>+
								</div>
								<h4 class="counter-title">Successfull Events Delivered </h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="10">0</span>+
								</div>
								<h4 class="counter-title">Team Members</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>