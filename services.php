<!-- Including Head Starts -->
<?php include_once("public/head.php");?>
<title><?php aboutusPL();?></title>
<!-- Including Head Ends -->
<body>



 <?php 
 include_once("db/db.php");

 $category=$_GET['category'];

 $query="SELECT * FROM `service` WHERE category='$category' ";
 $exe=mysqli_query($conn,$query);

 if(mysqli_num_rows($exe)>0)
 {

    $data=mysqli_fetch_assoc($exe);

    echo $date= $data['date'];
    $time= $data['time'];
    $title= $data['title'];
    $shortDescription= $data['shortDescription'];
    $shorthPath= $data['longPath'];
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
                <figure class="image">

                   <img src="images/serviceImages/<?php echo  $shorthPath;?>" alt=""></figure>
                   <span class="date"><?php echo $date;?></span>
               </div>
               <div class="lower-content">
                <div class="post-meta">
                    <ul class="post-info clearfix">
                        <li><a href="blog-detail.html">By : admin</a></li>
                        <li><a href="#"><?php echo $category ?></a></li>
                        <li><a href="blog-detail.html">Comments: 8</a></li>
                    </ul>
                </div>
                <div class="lower-box">
                 <h3><?php echo $title?></h3>
                 <div class="text">
                  <p>
                     <?php echo $shortDescription ?>                            
                 </p>


                 <p style="font-family: 'Open Sans', sans-serif !important;">
                  <?php echo $longDescription ?> 
              </p>
          </div>
      </div>
  </div>
</div>






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
        <li>

            <?php
            for($i=0;$i<count($serviceCategory);$i++)
            {
                ?>
                <li>
                    <a href="services.php?category=<?php echo $serviceCategory[$i]?>">
                        <?php echo $serviceCategory[$i]?>

                    </a>
                </li>

                <?php
            }
            ?>

        </li>
        
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
<!-- <div class="sidebar-widget popular-tags">
    <div class="sidebar-title"><h2>Tags</h2></div>
    <a href="#">Interior Tips</a>
    <a href="#">Lighting</a>
    <a href="#">Designs</a>
    <a href="#">Vintage Look</a>
    <a href="#">Kitchens</a>
    <a href="#">Kitchens</a>
</div> -->

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