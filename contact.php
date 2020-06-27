<!-- Including Head Starts -->
<?php include_once("public/head.php");?>
<title><?php conatctPL();?></title>
<!-- Including Head Ends -->

<style type="text/css">
  .whatsappShare
  {
    display:none !important;
  }

  @media screen and (max-width:480px) {

  .whatsappShare
  {
    display:block !important;
  }
 
}
  
</style>
<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two -->
        <?php include_once("public/header.php");?>   
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg)">
           <div class="auto-container">
               <h2><?php conatctPL()?></h2>
               <ul class="page-breadcrumb">
                   <li><a href="<?php homePLLink();?>"><?php homePL();?></a></li>
                   <li><?php conatctPL()?></li>
               </ul>
           </div>
       </section>
       <!--End Page Title-->

       <!-- Contact Form Section -->
       <section class="contact-form-section" style="background-image:url(images/background/contact.png)">
          <div class="auto-container">
             <!-- Sec Title -->
             <div class="sec-title">
                <h2>Get In Touch
                    
                </h2>
                
                <div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
            </div>

            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                   <div class="inner-column">

                      <!-- Contact Form -->
                      <div class="contact-form">

                         <!--Contact Form Starts-->
                         <?php include_once("includes/contact.php")?>
                         <!-- Contact form Ends -->
                     </div>

                 </div>
             </div>

             <!-- Info Column -->
             <div class="info-column col-lg-5 col-md-12 col-sm-12">
               <div class="inner-column">

                  <!-- Contact Info List -->
                  <ul class="contact-info-list">
                    <li><strong>Address :</strong><br><?php companyAddress();?></li>
                 </ul>
                 <!-- Contact Info List -->
                 <ul class="contact-info-list">
                    <li class="whatsappShare">
                       <a href="https://wa.me/<?php companyMobile2() ?>/?text=I+found+your+number+in+Epic+Planner%27s+%2C+Please+ping+me">
                           <img src="images/whatsapp.png" width="10%">
                        </a>
                     </li>
                     <li>
                      <strong>Phone : </strong><a href="tel:<?php companyMobile1() ?>"><?php companyMobile1() ?></a>
                     </li>
                     <li>
                      <strong>Phone : </strong><a href="tel:<?php companyMobile2() ?>"><?php companyMobile2() ?></a>
                     </li>
                     
                     <li><strong>Email : </strong><a href="mailto:info@stellaorre.com"><?php companyEmail();?></a></li>
                     
                 </ul>
                 <!-- Contact Info List -->
                 <ul class="contact-info-list">
                     <li><strong>Opening Hours :</strong><br><?php openingHours() ;?></li>
                 </ul>

             </div>
         </div>

     </div>

 </div>
</section>
<!-- End Contact Form Section -->

<!-- Map Section -->

    <div class="row">
     <div class="col-md-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.881746118973!2d77.51309391482275!3d13.043198390808998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDAyJzM1LjUiTiA3N8KwMzAnNTUuMCJF!5e0!3m2!1sen!2sin!4v1592935412311!5m2!1sen!2sin" width="1350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          
  
    </div>
</div>
<br
<!-- End Map Section -->

<!--Main Footer-->
<?php include_once("public/footer.php");?>
<!-- Main Fotter Ends -->

</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->



<?php include_once("public/js.php");?>
<!--Google Map APi Key-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js/map-script.js"></script>
 --><!--End Google Map APi-->

</body>

<!-- stella-orre/contact.html  30 Nov 2019 03:46:47 GMT -->
</html>