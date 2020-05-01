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
       <h1><i class="fa <?php  serviceIcon();?>"></i> Multiple Images  </h1>

        <p>Upload multiple images to service page</p>
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

                  <select  id="serviceCategory" name="serviceCategory" class="form-control">
                  <option value="0" >Please Select</option>
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
            <center id="gallery"><img width="150px" src="../gif/success_celebration_800x600.gif"></center>
             <center  id="war" style="color:#009688;">
              </center>
              
              <center id="result" style="color:#009688;" ></center>

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
  $("#gallery").css('display','none'); 
  $("#war").css('display','none');
      $('#uploadForm').on('submit', function(e){ 
          e.preventDefault();  
          if($("#serviceCategory").val()==0)
          {
              $("#war").css('display','block');
              $("#war").html("<h4>Please select category</h4>");
              $("#war").fadeOut(6000);


          }else{
             $.ajax({  
                url: "service/multipleImagesForServicePage.php",  
                type: "POST",  
                data: new FormData(this),  
                contentType: false,  
                processData:false,  
                success: function(data)  
                {  
                  if(data==1)
                  {

                  $("#gallery").css('display','block');
                  $("#gallery").fadeOut(6000);
                  $("#war").css('display','block');
                  $("#war").html("<h4>Done..!</h4>");
                  $("#war").fadeOut(6000);
                  $("#result").css('display','none');
                 
                  }else
                  {
                    $("#result").css('display','block');
                  }

                  $("#result").html("<h4>"+data+"</h4>");
                  
                  
                }  
           });
          } 
           
            
      });  
 });  
 </script> 
</body>
</html>