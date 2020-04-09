<?php include_once("categories/serviceCategory.php");?>
<?php include_once("public/head.php");?>
<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.php">EP's</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!--Notification Menu-->
      <?php include_once("public/notificationMenu.php");?>
      <!-- Notification Menu Ends -->
      <!-- User Menu-->
      <?php include_once("public/userMenu.php");?>
      <!-- User Menu Ends -->
    </ul>
  </header>
  <!-- Sidebar menu-->
  <?php include_once("public/menu.php");?>
  <!-- Sidebar menu Ends -->
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa <?php gallery();?>"></i> Gallery</h1>

        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <!-- Code Starts -->
          <div class="tile-body">

             <form id="uploadForm" action="upload.php" method="post"> 
              
              <div class="form-group">
                 <label>Select Category</label>

                  <select  name="serviceCategory" class="form-control">
                  <option>Please Select</option>
                  <?php
                    for($i=0;$i<count($serviceCategory);$i++)
                    {
                  ?>
                      <option><?php echo $serviceCategory[$i]?></option>
                  <?php
                    }
                  ?>

                  </select> 
              </div> 

              <div class="form-group">
                  <input class="form-control" id="filez" name="files[]" type="file" multiple /> 
                  *You can upload multiple images at a time.
              </div> 
              <div class="form-group">
                 <input class="btn btn-primary" type="submit" value="Upload" />  
              </div>

              
             </form>
             <div id="gallery"></div>
             <center id="war"></center>

          </div>
          <!-- Code Ends -->
        </div>
      </div>
    </div>


   
   



<!-- Essential javascripts for application to work Starts-->

<?php include_once("public/js.php");?>
<!-- Essential javascripts for application to work Ends-->
 
 <script>  
 $(document).ready(function(){

      $("#filez").change(function()
        {
          $("#gallery").css("display","none");
        });
      $('#uploadForm').on('submit', function(e){  
           e.preventDefault();  
           $.ajax({  
                url: "upload.php",  
                type: "POST",  
                data: new FormData(this),  
                contentType: false,  
                processData:false,
                beforeSend:function()
                {
                  $("#war").html("Please Wait..");
                }, 
                success: function(data)  
                {  


                     $("#gallery").css("display","block");
                      $("#war").css("display","none");
                     $("#gallery").html(data);

                       
                }  
           });  
      });  
 });  
 </script>


 </body>
</html>