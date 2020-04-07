<?php include_once("public/head.php");?>
<?php include_once("db/db.php");?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   <!--  <div class="preloader"></div> -->

    <?php include_once("public/header.php");?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Services</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Services 1</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>We Provide Different Services In Interior Field</h2>
				<div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple.</div>
			</div>
			
			<div class="row clearfix">
				
				
				<?php 
				$query="SELECT * FROM `gallery`";
				$exe=mysqli_query($conn,$query);
				//echo mysqli_num_rows($exe);
				if(mysqli_num_rows($exe)>0)
				{
					while($data=mysqli_fetch_assoc($exe))
					{
						

				?>
						<!-- Service Block Starts-->

						<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="residental-interior.html"><img src="admin/<?php echo $data["path"];?>" alt="" /></a>
						</div>
						 <div class="lower-content">
							<h3><a href="residental-interior.html"><?php echo $data["category"]?></a></h3>
							<!-- <div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotech Nology imme rsion along the information highway will close the loop.</div> -->
							<!-- <a href="residental-interior.html" class="read-more">Read more</a> -->
						</div>
					</div> 
				</div>

					<!-- Service Block Ends -->
				

				<?php
					}
				}
				?>		
				

				
				
				
							
				
				
				
				
			</div>

		</div>
	</section>
	<!-- End Story Section -->
	
	<!--Main Footer-->
	<?php include_once("public/footer.php");?>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/services-dark.html  30 Nov 2019 03:49:44 GMT -->
</html>