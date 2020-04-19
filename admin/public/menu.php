<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/logo.jpg" alt="User Image">
        <div>
          <!-- <?php echo $_SESSION["uname"];?> -->
          <p class="app-sidebar__user-name">Epic Planner's</p>
          <p class="app-sidebar__user-designation">We Create,You Celebrate</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
        

        <li><a class="app-menu__item" href="gallery.php"><i class="app-menu__icon fa <?php gallery();?>"></i><span class="app-menu__label">Gallery</span></a></li>

        <li><a class="app-menu__item" href="contact-list.php"><i class="app-menu__icon fa <?php contactList();?>"></i><span class="app-menu__label"><?php echo contactListTitle();?></span></a></li>
        <li><a class="app-menu__item" href="leadList.php"><i class="app-menu__icon fa <?php leadListIcon();?>"></i><span class="app-menu__label"><?php echo leadListTitle();?></span></a></li>
        

        <li><a class="app-menu__item" href="service.php"><i class="app-menu__icon fa <?php serviceIcon();?>"></i>
          <span class="app-menu__label"><?php echo serviceTitle();?></span></a></li>

        <li><a class="app-menu__item" href="serviceList.php"><i class="app-menu__icon fa <?php serviceIcon();?>"></i>
          <span class="app-menu__label"><?php echo serviceListTitle();?></span></a></li>

         
        
        

       
        
        
        
      </ul>
    </aside>