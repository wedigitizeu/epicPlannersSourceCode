
<?php 

include_once("public/head.php");


?>
<title><?php serviceListTitle();?></title>
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
        <h1><i class="app-menu__icon fa <?php serviceIcon();?>"></i> <?php serviceListTitle();?></h1>

        <p>You can edit or delete particular service</p>
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
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th><?php slNoLabel();?></th>
                      <th><?php dateLabel();?></th>
                      <th><?php timeLabel();?></th>
                      <th><?php titleLabel();?></th>
                      <th><?php categoryLabel();?></th>
                      <th><?php editLabel();?></th>
                      <th><?php deleteLabel();?></th>
                       
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      
                      $query="SELECT * FROM `service` WHERE status='1' ORDER BY `id` DESC";
                      $exe=mysqli_query($conn,$query);
                      
                      if(mysqli_num_rows($exe)>0)
                      {
                        $records=0;
                        while($data=mysqli_fetch_assoc($exe))
                        {

                           $records=$records+1;

                    ?>
                    <tr>
                      <td><?php echo $records; ?></td>
                      <td><?php echo $data['date'];?></td>
                      <td><?php echo $data['time'];?></td>
                      <td><?php echo $data['title'];?></td> 
                      <td><?php echo $data['category'];?></td>

                      
                      <td><button   value="<?php echo  $data['id']; ?>" class="btn btn-success btn-sm lead">Edit</button></td>
                      <td><button   value="<?php echo  $data['id']; ?>" class="btn btn-danger btn-sm deleteBtn">Delete</button></td>
                    </tr>
                    <input class="photoPath" type="hidden" name="photo" value="<?php echo $data['shortPath'];?>">
                    
                    <?php
                    }


                    echo "Total Contact List ".$_SESSION["contactListCount"]=$records;
                    echo "<br><br>";

                    }
                  ?>
                    
                    
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



      $(".deleteBtn").click(function()
        {
          var id=$(this).val();
          


          var response = confirm("Are you Sure you want to delete..?");
          if (response == true) {

            

            $.post("service/delete.php",
              {id:id},
              function(data){

                if(data=='false')
                {
                  alert("Something went wrong please contact your administrator");
                }
                else
                {
                  
                  window.location.href='serviceList.php';
                }

            });


          } else {

            //Do Nothing
          }
           

        });
      
    });
</script>
<!-- Essential javascripts for application to work Ends-->
 
 </body>
</html>