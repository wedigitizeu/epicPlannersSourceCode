<?php include_once("public/head.php");?>
<?php include_once("categories/serviceCategory.php")?>

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
        <h1><i class="fa fa-dashboard"></i> Gallery</h1>

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


            <!----------form-------- -->
            <form id="userForm" method="post" action="insert-new-package.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">


                  <!-- Trigger the modal with a button -->

                  <div class="form-group">


                    <br>
                    <label for="exampleInputEmail1">Service Category</label>  
                    <div class="form-group">    

                      <select class="form-control" id= "category" name="category">
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







                  </div>


                  <div class="tile-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input class="form-control"  type="text" id="title" name="title"/>

                    </div>

                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Upload Photo (555 X 555)</label>
                      <input class="form-control"  type="file" id="photo"  name="photo">

                    </div> -->

                    <div class="form-group">
                      
                      <label for="exampleInputEmail1">Image alt</label>
                      <input class="form-control"  type="text"  name="alt">

                    </div>


                    



                    <div class="form-group">
                      
                      <label class="control-label">Short Description</label>
                      <textarea class="form-control" rows="6" id="shortDesc"
                      name="shortDesc" placeholder="Maximum 200 Letters"></textarea>
                    </div>
                    <br><br><br>
                
                  </div>




                </div>
                <div class="col-md-1"></div>


                <!----- Long Description------>

                <div class="col-md-12">

                  <h3 class="tile-title">Description</h3>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Upload Photo (671 X 353)</label>
                    <input class="form-control"  type="file" name="image2">

                  </div> 


                  <div class="form-group">
                    <label for="exampleInputEmail1">Image2  alt</label>
                    <input class="form-control"  type="text"  name="alt2">

                  </div>-->

                  <div class="tile-body">

                   <div class="form-group col-md-3">

                     <textarea id="editor1" rows="10" cols="80" name="editor1"></textarea>

                   </div>

                 </div>




                 <div class="form-group">
                  <input class="btn btn-danger" type="reset" value="Clear" />
                  <input class="btn btn-success" type="submit" value="Save" id="save"  name="save"/>
                </div>

                <p id="response"></p>




              </div>`
            </form>
            <!-- form ends -->


          </div>
          <!-- Code Ends -->
        </div>
      </div>
    </div>




<script>
  $(document).ready(function()
    {

$("#save").click(function(e)
  {
        e.preventDefault();
        $.ajax({
                type: 'POST',
                url: 'service/insert.php',
                data: $("#userForm").serialize(),
                beforeSend: function() {
                    
                    $("#response").html("Please wait...");
                },
                success: function(data) {
                   
                   $("#response").html(data);
                }

          })

  });
    



    });
</script>


    <!-- Essential javascripts for application to work Starts-->

    <?php include_once("public/js.php");?>
    <!-- Essential javascripts for application to work Ends-->

  </body>
  </html>