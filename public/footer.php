
<footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.html"><img src="images/logo8.png" alt="" /></a>
                                    	<h3 style="color: #E9D689"><?php companyTitle();?></h3>
                                    </div>
                                    <div class="text" style="color: #FFFFFF">
                                    	To transform your dreams into an event to be remembered for a lifetime.
                                    </div>
                                    
                                   <!--  <ul class="social-icons">
                                        <li><a href="<?php faceBook();?>"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="<?php  linkdin()?>"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="<?php twitter()?>"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="<?php Insta();?>"><span class="fab fa-instagram"></span></a></li>

                                    </ul> -->
                                 <?php include_once("public/socialMediaFooter.php");?>
                                 
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2 style="color: #E9D689">Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li class="text" style="color: #FFFFFF"><a href="<?php homePLLink();?>" style="color: #FFFFFF"><?php homePL();?></a></li>
                                            <li class="text" style="color: #FFFFFF"><a href="<?php aboutusPLLink();?>" style="color: #FFFFFF"><?php aboutusPL();?></a></li>
                                            <li  class="text" style="color: #FFFFFF"><a href="<?php  conatctPLLink();?>"style="color: #FFFFFF"><?php conatctPL();?></a></li>
                                            
                                        </ul>
                                    </div>
								</div>
							</div>
						
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2 style="color: #E9D689"><?php conatctPL(); ?></h2>
									<div class="widget-content">
										<i class="fa fa-phone" aria-hidden="true"
										style="color: #E9D689"></i>
										<a href="tel:<?php companyMobile1();?>" class="contact-number" style="color: #FFFFFF">
											<?php companyMobile1();?>
										</a><br>
                                          <i class="fa fa-phone" aria-hidden="true" style="color: #E9D689"></i>
										<a href="tel:<?php companyMobile2();?>" class="contact-number" style="color: #FFFFFF">
											<?php companyMobile2();?>
										</a>
										<li class="text" style="color: #FFFFFF"> <i class="fa fa-envelope" aria-hidden="true" class="email" style="color: #E9D689"></i> <span><?php companyEmail();?></span></li>
										<br>

										<h5 style="color: #E9D689">Company Address :</h5>
										<ul>
											<li class="text" style="color: #FFFFFF"><?php companyAddress();?></li>
											
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2 style="color: #E9D689">Newsletter</h2>
									<div class="text" style="color: #FFFFFF">Get Special offers & Discounts</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="#">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="<?php poweredByPLLink()?>"><?php poweredByPL()?></a></div>
                </div>
                <div class="pull-right">
                    
                </div>
            </div>
			
		</div>
	</footer>
	        <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eae3bec1585cb42"></script>
