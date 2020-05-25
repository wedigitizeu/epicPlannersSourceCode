<?php 
include_once("public/head.php");
//$query="SELECT * FROM `contact` WHERE status='lead' ORDER BY `id` DESC";
$query="SELECT * FROM `contact`";
$exe=mysqli_query($conn,$query);
$totalContacts=mysqli_num_rows($exe);
$query="SELECT * FROM `contact` WHERE status='lead'";
$exe=mysqli_query($conn,$query);
$totalLeads=mysqli_num_rows($exe);

$query="SELECT * FROM `service`";
$exe=mysqli_query($conn,$query);
$totalServices=mysqli_num_rows($exe);

$query="SELECT * FROM `category`";
$exe=mysqli_query($conn,$query);
$totalCategories=mysqli_num_rows($exe);

                      

?>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">EP's</a>
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
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>See and manage the data</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa <?php contactList();?> fa-3x"></i>
            <div class="info">
              <h4>Contacts</h4>
              <p><b><?php echo $totalContacts?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa <?php echo leadListIcon(); ?> fa-3x"></i>
            <div class="info">
              <h4>Leads</h4>
              <p><b><?php echo $totalLeads; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">

          <div class="widget-small warning coloured-icon"><i class="icon fa <?php echo contactList();?> fa-3x"></i>
            <div class="info">
              <h4>On Hold</h4>
              <p><b><?php echo $hold=$totalContacts-$totalLeads; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa <?php echo serviceIcon(); ?> fa-3x"></i>
            <div class="info">
              <h4>Total Services</h4>
              <p><b><?php echo $totalServices." / ".$totalCategories;?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Future Use</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Leads vs On Hold</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      

      
      var pdata = [
      	{
      		value: <?php echo $totalLeads?>,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Leads"
      	},
      	{
      		value:<?php echo $hold=$totalContacts-$totalLeads; ?>,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "On Hold"
      	}
      ]

         var rdata = [
        {
          value: <?php echo $totalLeads?>,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Leads"
        },
        {
          value:<?php echo $hold=$totalContacts-$totalLeads; ?>,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "On Hold"
        }
      ]
      
     
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(rdata);
    </script>
    
  </body>
</html>