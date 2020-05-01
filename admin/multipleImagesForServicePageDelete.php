
<?php 

include_once("public/head.php");
?>
<title><?php contactListTitle();?></title>
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
        <h1><i class="fa <?php deleteGalleryImagesIcon();?>"></i> <?php deleteServicePageMoreImagesTitle();?></h1>

        <p>Delete service page images  </p>
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

            <!-- Table Starts -->
            <form method="post" action="checkbox/multipleImagesForServicePageDelete.php">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      
                      <th><?php dateLabel();?></th>
                      <th><?php imageTitle();?></th>
                      <th><?php categoryLabel();?></th>
                      
                     
                      <th><input class="checkBoxAll"  type="checkbox" name=""></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      
                      $query="SELECT * FROM `servicepagemoreimages` ORDER BY id DESC ";
                      $exe=mysqli_query($conn,$query);
                      
                      if(mysqli_num_rows($exe)>0)
                      {
                        $records=0;
                        while($data=mysqli_fetch_assoc($exe))
                        {

                           $records=$records+1;

                    ?>
                    <tr>

                      <td><?php echo $data['date'];?></td>
                      <td>

                        <center>
                        <img width="150px" src="../images/serviceImages/<?php echo $data['name'];?>">
                        </center>
                        
                      </td>
                      <td><?php echo $data['category'];?></td>
                      <td>
                        <input type="checkbox" class="checkBox"   name="chk[]" value="<?php echo  $data['id']; ?>"/>
                      </td>
                    </tr>
                    
                    <?php
                    }


                     "Total Contact List ".$_SESSION["contactListCount"]=$records;
                   

                    }
                  ?>
                   <!-- Check Box delete button Starts -->
                   <div calss="col-md-6"></div>
                   <div calss="col-md-6">
                    <div class="form-group" style="float:right">
                      <input class="btn btn-sm btn-danger delBtn"  value="Delete selected Images" type="submit" name="checkBoxDelete"/>

                      <!-- <input class="btn btn-sm btn-success movBtn"  type="submit" 
                      name="checkBoxLead" value="Convert selected records to leads" required /> -->
                    </div>

                  </div>
          </form>
          <br><br><br>
          <!-- Check Box delete button ends -->
                    
                  </tbody>
                </table>
              </div>
            <!-- Table Ends -->

          </div>
          <!-- Code Ends -->
        </div>
      </div>
    </div>


   
   



<!-- Essential javascripts for application to work Starts-->

<?php include_once("public/js.php");?>
<script type="text/javascript">
  $(document).ready(function()
    {
      
        

      $(".checkBoxAll").click(function(){

          if(this.checked)
          {
              $(".checkBox").each(function(){
               $(this).prop('checked','true');
               
               

            });  
          }
          else
          {
              $(".checkBox").each(function(){
               $(this).prop('checked',false);
               

            });
          }

      });


       $(".lead").click(function()
        {
          var id=$(this).val();
           $.post("updateContactList.php",{id:id},function(data)
            {

                if(data=='false')
                {
                  alert("Something went wrong please contact your administrator");
                }
                else
                {
                  window.location.href='contact-list.php';
                }

            });

        });
          });
      
   
</script>
<!-- Essential javascripts for application to work Ends-->
 
 </body>
</html>