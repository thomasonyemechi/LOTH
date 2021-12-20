<?php
session_start(); ob_start();
$id = $_SESSION['user_idx'];
//$pack = 'UTME';
//$report = isset($_SESSION['report']) ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loth</title>
  <!-- Tell the browser to be responsive to screen width -->
     <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <?php include('nav.php'); ?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php if(isset($report)){echo $edg->Alert(); } ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo numsqLx2('user'); ?></h3>

                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo numsqLx2('blog'); ?></h3>

                <p>Blogs</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo numsqLx2('book'); ?></h3>

                <p>Books</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo numsqLx2('event'); ?></h3>

                <p>Event</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
                            <!-- Quick Action Toolbar Starts-->
                    <div class="row quick-action-toolbar">
                        <div class="col-md-12 grid-margin">
                            <div class="card card-primary">
                                <div class="card-header d-block d-md-flex">
                                    <h5 class="mb-0">Quick Actions</h5>
                                    <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                                </div>
                                <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                                    <div class="col-sm-6 col-md-3 col-6 p-3 text-center btn-wrapper">
                                        <a href="statistics.php" type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Search User</a>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-6  p-3 text-center btn-wrapper">
                                        <a href="createblog.php" type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Blog</a>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-6  p-3 text-center btn-wrapper">
                                        <a href="addadmin.php" type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Add Staff</a>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-6  p-3 text-center btn-wrapper">
                                        <a href="sendmessage.php" type="button" class="btn px-0"><i class="icon-book-open mr-2"></i> Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Action Toolbar Ends-->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-secondary card-secondary">
              <div class="card-header">
                <h3 class="card-title">Book Downloads</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                           <?php
            $sql = $db->query("SELECT * FROM book ORDER BY sn DESC LIMIT 20 ");
            if(mysqli_num_rows($sql)>0){

             ?>
                <table id="example1" class="table table-sm">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Upload</th>
                          <th>Downloads</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      
                  $i=1;
                      while ($row = mysqli_fetch_assoc($sql)){ $e = $i++;
                          $bookid = $row['id'];
                        $sql1 = $db->query("SELECT * FROM download WHERE book='$bookid' ");  
                        $num = mysqli_num_rows($sql1);
                       ?>
                       <tr>
                           <td><?php echo $row['title']; ?></td>
                           <td><?php echo date('M j',strtotime($row['created'])); ?></td>
                           <td><?php echo $num; ?></td>
                           
                       </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr><th colspan="4" class="text-center"><a href="#">View All</a></th></tr>
                  </tfoot>
                </table>
          <?php } ?>


              </div>
            </div>
            <div class="card direct-chat direct-chat-secondary card-secondary">
              <div class="card-header">
                <h3 class="card-title">Magazine Downloads</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                           <?php
            $sql = $db->query("SELECT * FROM magzine ORDER BY sn DESC LIMIT 20 ");
            if(mysqli_num_rows($sql)>0){

             ?>
                <table id="example1" class="table table-sm">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Month</th>
                          <th>Downloads</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      
                  $i=1;
                      while ($row = mysqli_fetch_assoc($sql)){ $e = $i++;
                          $bookid = $row['id'];
                        $sql1 = $db->query("SELECT * FROM download WHERE book='$bookid' ");  
                        $num = mysqli_num_rows($sql1);
                       ?>
                       <tr>
                           <td><?php echo $row['title']; ?></td>
                           <td><?php echo date('F',strtotime($row['created'])); ?></td>
                           <td><?php echo $num; ?></td>
                           
                       </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr><th colspan="4" class="text-center"><a href="#">View All</a></th></tr>
                  </tfoot>
                </table>
          <?php } ?>


              </div>
            </div>



            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button"
                          class="btn btn-primary btn-sm daterange"
                          data-toggle="tooltip"
                          title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button"
                          class="btn btn-primary btn-sm"
                          data-card-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>





<?php include('foot.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
