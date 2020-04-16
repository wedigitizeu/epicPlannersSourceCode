<!-- Including Head Starts -->
<?php include_once("public/head.php");?>
<title><?php aboutusPL();?></title>
<!-- Including Head Ends -->
<body>



     <?php 
              include_once("db/db.php");

                      $query="SELECT * FROM `service` WHERE id='90' ";
                      $exe=mysqli_query($conn,$query);
                      
                      if(mysqli_num_rows($exe)>0)
                      {
                        
                        $data=mysqli_fetch_assoc($exe);

                         echo $date= $data['date'];
                         $time= $data['time'];
                         $title= $data['title'];
                         //$shortDescription= $data['shortDescription'];
                         //$shorthPath= $data['shorthPath'];
                         $longDescription= $data['longDescription'];
                     }
                         




                           
?>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

     <!-- Main Header / Header Style Two -->
        <?php include_once("public/header.php");?>   
        <!-- End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Blog Details</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single padding-right">
						<div class="inner-box">
							<div class="image-box">
                                <figure class="image"><img src="images/resource/news-4.jpg" alt=""></figure>
                                <span class="date"><?php echo $date;?></span>
                            </div>
                            <div class="lower-content">
                                <div class="post-meta">
                                    <ul class="post-info clearfix">
                                        <li><a href="blog-detail.html">By : admin</a></li>
                                        <li><a href="blog-detail.html">interior, furniture</a></li>
                                        <li><a href="blog-detail.html">Comments: 8</a></li>
                                    </ul>
                                </div>
								<div class="lower-box">
									<h3><?php echo $title?></h3>
									<div class="text">
										<p>
                                            <?php echo "sxds,m,m"?>                              
                                        </p>
										<h4>Two Column Text Sample</h4>
										<div class="row clearfix">
											<div class="col-md-6 col-sm-6 col-xs-12">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
											</div>
										</div>
										<p>Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#">here is link</a> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
                        
                    	
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments 4</h2></div>
                            <div class="inner-box">
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Robert john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="comment reply-comment">
                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Robert john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Sarah john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="comment-form">
                                
                            <div class="group-title"><h2>Leave a Comment</h2></div>
                            <div class="form-inner">
                                <!--Comment Form-->
                                <form method="post" action="http://t.commonsupport.com/stella-orre/blog.html">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Your name" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Post Comment</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Comment Form -->
                        
                    </div>
				</div>
				
				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">Modular Kitchen</a></li>
                                <li><a href="#">Lighting Effect</a></li>
                                <li><a href="#">Interior Tips</a></li>
                                <li><a href="#">Modern Wardrobe</a></li>
                                <li><a href="#">Modern Furniture</a></li>
                                <li><a href="#">Wooden Interior</a></li>
                            </ul>
                        </div>
						
						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent News</h2></div>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Hanging fruit to identify a ballpark value added ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Organically grow the holistic world view ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Bring to the table in the win-win survival ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Override the digital divide with additional ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                        </div>
						
						<!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="#">Interior Tips</a>
                            <a href="#">Lighting</a>
                            <a href="#">Designs</a>
                            <a href="#">Vintage Look</a>
                            <a href="#">Kitchens</a>
                            <a href="#">Kitchens</a>
                        </div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
	<!--Main Footer-->
<?php include_once("public/footer.php");?>
<!-- Main Fotter Ends -->

</div>  
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->

<?php include_once("public/js.php");?>
</body>

<!-- stella-orre/blog-detail.html  30 Nov 2019 03:52:07 GMT -->
</html>