<?php
session_start(); ob_start();
if (array_key_exists('edit', $_POST)) {
    $_SESSION['bsn'] = $_POST['edit'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loth</title>
  <?php include('link.php'); ?>
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
            <h1 class="m-0 text-dark">Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Blog</li>
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
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- /.card -->
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                <?php  if (!isset($_SESSION['bsn'])) {echo 'Add New Blog'; }else{echo 'Update Blog';} ?>
               </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                                    <div id="refresh"><?php if (isset($report)) {
                                                            echo $pro->Alert();
                                                        } ?></div>

                                    <?php if (isset($_SESSION['bsn'])) {
                                        $id = $_SESSION['bsn'];
                                        $sql = $db->query("SELECT * FROM blog WHERE sn='$id' ");
                                        while ($ro = mysqli_fetch_array($sql)) {  ?>
                          

                                            <form method="post" enctype="multipart/form-data">
                                          <div class="row">
                                            <div class="col-xl-6 form-group">
                                              <label>Category</label>
                                                <select name="category" class="js-example-basic-single form-control form-control-lg" style="width:100%" required>
                                                    <option value="" selected disabled>Select Blog Categories</option>
                                                    <?php $result = $db->query("SELECT * FROM category ORDER BY title") or die();
                                                    while ($row = mysqli_fetch_array($result)) {

                                                        echo '<option value="' . $row['sn'] . '">' . $row['title'] . '</option>';
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                            <div class="col-xl-6 form-group">
                                                <label>Title</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="text" name="title" value="<?php echo $ro['title'];  ?>" class="form-control form-control" placeholder="Insert the Blog Title">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label>File upload</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="file" name="photo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="exampleTextarea1">Summary</label>
                                                <textarea name="subtitle" value="<?php echo $ro['subtitle'];  ?>" class="form-control" id="" rows="4"></textarea>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="exampleTextarea1">Details</label>
                                                <textarea name="detail" rows="4" class="textarea" placeholder="Place some text here"><?php echo $ro['title'];  ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="updateBLog">Update</button>
                                            </div>
                                        </form>
                                        <?php }
                                    } else { ?>
                                        <form method="post" enctype="multipart/form-data">
                                          <div class="row">
                                            <div class="col-xl-6 form-group">
                                              <label>Category</label>
                                                <select name="category" class="js-example-basic-single form-control form-control" style="width:100%" required>
                                                    <option value="" selected disabled>Select Blog Categories</option>
                                                    <?php $result = $db->query("SELECT * FROM category ORDER BY title") or die();
                                                    while ($row = mysqli_fetch_array($result)) {

                                                        echo '<option value="' . $row['sn'] . '">' . $row['title'] . '</option>';
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                            <div class="col-xl-6 form-group">
                                                <label>Title</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="text" name="title" class="form-control form-control" placeholder="Insert the Blog Title" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label>File upload</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="file" name="photo" class="form-control form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="exampleTextarea1">Summary</label>
                                                <textarea name="subtitle" class="form-control" id="" rows="4"></textarea>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="exampleTextarea1">Details</label>
                                                <textarea name="detail" rows="4" class="textarea" placeholder="Place some text here"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="addBlog">Submit</button>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
            </div>


            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
          <section class="col-lg-12">
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
                      <th>Title</th>
                      <th>Category</th>
                      <th>Rep</th>
                      <th>Date</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $i = 1;
                  $query = $db->query("SELECT * FROM blog ORDER BY sn DESC LIMIT 30") or die(mysqli_error());
                  while ($row = mysqli_fetch_array($query)) {
                      $e = $i++;

                  ?>




                      <tr class="odd gradeX">
                          <td class="center"><?php echo $e; ?></td>
                          <td><?php echo ucwords($row['title']); ?></td>
                          <td><?php echo sqLx('category','sn',$row['category'],'title'); ?></td>
                          <td><?php echo $pro->snToName($row['rep']); ?></td>
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
