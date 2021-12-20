<?php
session_start(); ob_start();
$id = $_SESSION['user_idx'];
if (array_key_exists('edit', $_POST)) {
  $_SESSION['cid'] = $_POST['edit'];
}
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
            <h1 class="m-0 text-dark">Blog Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php if(isset($report)){echo $pro->Alert(); } ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- /.card -->
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                <?php if (!isset($_SESSION['cid'])) {echo 'Add New Blog Category'; }else{echo 'Update Category';} ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">

                  <?php if (isset($_SESSION['cid'])) {
                    $id = $_SESSION['cid'];
                    $sql = $db->query("SELECT * FROM category WHERE sn='$id' ");
                    while ($ro = mysqli_fetch_array($sql)) { ?>
                      <form method="post" >
                        <div class="row">
                        <div class="form-group col-lg-7">
                          <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Input Category" value="<?php echo $ro['title']; ?>">
                        </div>
                        <div class="form-group col-lg-5">
                        <p><button type="submit" class="btn btn-primary mr-2" style="float: right;" name="updateCategory">Update</button>
                        <button type="submit" class="btn btn-danger mr-2" style="float: right;" name="deleteCategory">delete</button></p>
                      </div>
                      </div>
                      </form>
                    <?php }
                  } else { ?>
                    <form method="post">
                      <div class="row">
                        <div class="form-group col-lg-9">
                        <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Input Category Name">
                      </div>
                      <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary mr-2" style="float: right;" name="addCategory">Submit</button>
                        </div>
                    </form>
                  <?php } ?>
              </div>
            </div>


            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
          <section class="col-lg-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Recent Category </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm">
                  <thead>
                      <tr>
                        <th>SN</th>
                        <th>Categories</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      $query = $db->query("SELECT * FROM category ORDER BY sn DESC") or die('cannot to server');
                      while ($row = mysqli_fetch_array($query)) {
                        $e = $i++;

                      ?>
                        <tr class="odd gradeX">
                          <td class="center"><?php echo $e; ?></td>
                          <td><?php echo ucwords($row['title']); ?></td>
                          <td><?php echo date('j/M/Y', $row['ctime']); ?></td>
                          <form method="post">
                            <td><button name="edit" class="btn btn-primary" value="<?php echo $row['sn']; ?>">Edit</button></td>
                          </form>
                        </tr><?php }  ?>
                    </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>
          </section>
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
