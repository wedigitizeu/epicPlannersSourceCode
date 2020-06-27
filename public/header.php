<?php include_once("db/db.php"); ?>
<!-- <?php include_once("admin/categories/serviceCategory.php")?> -->		
<header class="main-header header-style-two">

	<!-- Header Upper -->
	<div class="header-upper">
		<div class="outer-container clearfix">
			<!--Info-->
			<div class="logo-outer">


				<div class="logo"><a href="<?php homePLLINK();?>"><img src="images/logo8.png" alt="<?php companyTitle();?>" title="" ></a></div>
			</div>


			<!--Nav Box-->
			<div class="nav-outer clearfix">
				<!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
				<nav class="main-menu navbar-expand-md navbar-light">
					<div class="navbar-header">
						<!-- Togg le Button -->      
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon flaticon-menu-1"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix">
							
							<li>
								<a href="<?php homePLLink()?>"><?php homePL();?></a>

							</li>
							<li><a href="<?php aboutusPLLink();?>"><?php aboutusPL();?></a>
										<!-- <ul>
											<li><a href="about.html">Our Introduction</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
										</ul> -->
									</li>
									

									<li class="dropdown"><a href="#"><?php servicePL();?></a>
										<ul>
											
											<?php

											$query="SELECT * FROM `category`";
											$exe=mysqli_query($conn,$query);

											if(mysqli_num_rows($exe)>0)
											{
												$records=0;
												while($data=mysqli_fetch_assoc($exe))
												{
												?>

													
													<li>
													<a href="services.php?category=<?php echo $data['category']; ?>">
														<?php echo $data['category']; ?>

													</a>
												</li>


										<?php
											}


											}

											?>
											
										</ul>
									</li>


									<li class="dropdown"><a href="#"><?php galleryPL();?></a>
										<ul>

											<?php

											$query="SELECT * FROM `category`";
											$exe=mysqli_query($conn,$query);

											if(mysqli_num_rows($exe)>0)
											{
												$records=0;
												while($data=mysqli_fetch_assoc($exe))
												{
												?>

													
													<li>
													<a href="gallery.php?category=<?php echo $data['category']; ?>">
														<?php echo $data['category']; ?>

													</a>
												</li>


										<?php
											}


											}

											?>

											
											
										</ul>
									</li>
									
									<!-- <li class="dropdown"><a href="projects-classic.html">Projects</a>
										<ul>
											<li><a href="projects-classic.html">Projects Classic</a></li>
											<li><a href="projects-masonry.html">Project Masonry</a></li>
											<li><a href="projects-fullwidth.html">Project Full Screen</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="blog.html">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-2.html">blog 2 column</a></li>
											<li><a href="blog-detail.html">Blog Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="shop.html">Shop</a>
										<ul>
											<li><a href="shop.html">Main shop page</a></li>
											<li><a href="product-detail.html">Product Detail Page</a></li>
											<li><a href="cart-page.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout</a></li>
										</ul>
									</li> -->
									<li><a href="<?php conatctPLLink();?>"><?php conatctPL();?></a></li>
									<li>
										<a href="tel:<?php companyMobile1();?>"><?php companyMobile1();?></a>
									</li>
									<li>
										<a href="tel:<?php companyMobile2();?>"><?php companyMobile2();?></a>
									</li>
								</ul>
							</div>
						</nav>
						<!-- Main Menu End-->

						<!-- Outer Box -->
						<div class="outer-box clearfix">
							<!-- <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span> -->
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-cancel"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
					<ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
					<!--Social Links-->
				<!-- 	<div class="social-links">
						<ul class="clearfix">
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="<?php faceBook();?>"><span class="fab fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
							<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div> --> 
					<?php include_once("public/socialMediaHeader.php");?>
					

				</nav>
			</div><!-- End Mobile Menu -->

		</header>