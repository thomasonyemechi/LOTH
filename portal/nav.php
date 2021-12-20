<?php
 include("asset/connect.inc.php");
 if(isset($_SESSION['user_idx'])){}else{header('location: ../login.php');}
 $id = $_SESSION['user_idx'];
  ?>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       <span style="color: black; font-size: 20px; padding-right: 20px;"><?php  echo ucwords(userName($id)) ?></span>
      </li>
    </ul>
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

         
                          <div class="navbar-brand">
                   <a href="dashboard.php" class="brand-link text-center">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
<!--                                 <img src="../img/logo.png" width="50%" alt="homepage" class="dark-logo"  />
 -->                                <!-- Light Logo icon -->
 <h4>Light On The Hill</h4>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                             </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                        </a>
                    </div>


    <!-- Sidebar -->
    <div class="sidebar">

            <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="uphoto/<?php echo userName($pro->Uid(),'photo') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="userprofile.php" class="d-block"><?php echo userName($id) ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">



        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="dashboard.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="createevent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Event</p>
                </a>
              </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Blog Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="createcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="createblog.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Blog</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bloginfo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Comment</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Magazine And Books
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addbook.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Book</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Info</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addmagzine.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Magazine</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Magazine</p>
                </a>
              </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="statistics.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="teenager.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teenagers</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="youth.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Youth</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adult.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adult</p>
                </a>
              </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Others
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewtestimonies.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonies</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="support.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support</p>
                </a>
              </li>
            </ul>
            </li>
            </ul>
          </li>

      <!--     <li class="nav-item has-treeview" style="width: 100%;">
            <a href="logout.php" class="nav-link">
                  <button class="btn btn-danger btn-block">Logout</button>
                </a>
                
              </li>
 -->

          <li class="nav-item has-treeview">
          <form method="POST">
            <a href="logout.php" class="btn btn-block btn-danger">
               <i class="fa fa-power-off"></i> Logout
            </a>
          </form>
        </li>

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>