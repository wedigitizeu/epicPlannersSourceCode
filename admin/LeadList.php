
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
        <h1><i class="fa <?php leadListIcon();?>"></i> <?php leadListTitle();?></h1>

        <p>Showing all confirmed order list</p>
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
              <form method="post" action="checkbox/convertToNoLead.php">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th><?php dateLabel();?></th>
                      <th><?php timeLabel();?></th>
                      <th><?php name();?></th>
                      <!-- <th><?php email();?></th> -->
                      <th><?php mobile();?></th>
                      <th><?php looking();?></th>
                      <th><?php location();?></th>
                      <th>Action</th>
                      <th><input class="checkBoxAll"  type="checkbox" name=""></th> 
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      
                      $query="SELECT * FROM `contact` WHERE status='lead' ORDER BY `id` DESC";
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
                      <td><?php echo $data['time'];?></td>
                      <td><?php echo $data['name'];?></td>
                      <a href="tel:<?php echo $data['mobile']?>">
                        <td><?php echo $data['mobile'];?></td>
                      </a>
                      <td><?php echo $data['looking'];?></td>
                      <td><?php echo $data['location'];?></td>
                      <td><button   value="<?php echo  $data['id']; ?>" class="btn btn-success btn-sm lead">Add Event</button></td>
                      <td>
                        <input type="checkbox" class="checkBox"   name="chk[]" value="<?php echo  $data['id']; ?>"/>
                      </td>
                    </tr>
                    
                    <?php
                    }


                    echo "Total Contact List ".$_SESSION["contactListCount"]=$records;
                    echo "<br><br>";

                    }
                  ?>

                    <!-- Check Box delete button Starts -->
                   <div calss="col-md-6"></div>
                   <div calss="col-md-6">
                    <div class="form-group" style="float:right">
                      <input class="btn btn-sm btn-danger delBtn"  value="Delete selected records" type="submit" 
                      name="checkBoxDelete" required />

                      <input class="btn btn-sm btn-success movBtn"  type="submit" 
                      name="checkBoxLead" value="Move selected records to contact us list" required />
                    </div>

                  </div>
         
          <br><br><br>
          <!-- Check Box delete button ends -->
                    
                    
                  </tbody>
                </table>
                 </form>
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