<?php include_once("public/head.php");?>
<?php include_once("db/db.php");
session_start();
?>

<?php
	
	$_SESSION["category"]=$_GET['category'];

?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   <!--  <div class="preloader"></div> -->

    <?php include_once("public/header.php");?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2><?php echo $_SESSION["category"]; ?></h2>

            <ul class="page-breadcrumb">
            	<li><a href="index.php">home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </section>
    
    <!--End Page Title-->
	
	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>OUR AWESOME  GALLERY </h2>
				<!-- <div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple.</div> -->
			</div>
			
			<div id="loadImages"  class="row clearfix">
				
				
				
				  <!-- Images Block Starts-->

					

					<!-- Images Block Ends -->
			</div>
			<p id="loadImagesMsg"></p>

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
<script>
	$(document).ready(function(){
		var limit=3;
		var start=0;
		var action='inactive';
		function loadImageData(limit,start)
		{
			$.ajax({

				url:"fetchImages.php",
				method:"POST",
				data:{limit:limit,start:start},
				cache:false,
				success:function(data)
				{
					$("#loadImages").append(data);
					if(data.trim()=="")
					{
						$("#loadImagesMsg").html("Done...");
						action="active";
					}else
					{
						$("#loadImagesMsg").html("Loading...");
						action="inactive";	
					}
				}
			});
		}

		if(action=='inactive')
		{
			action='active';
			loadImageData(limit,start);

		}
		
		$(window).scroll(function(){
		  if($(window).scrollTop() + $(window).height() > $("#loadImages").height() && action == 'inactive')
		  {
		   action = 'active';
		   start = start + limit;
		   setTimeout(function(){
		    loadImageData(limit, start);
		   }, 1000);
		  }
		 });
	});
</script>

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