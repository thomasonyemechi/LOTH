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
            <h1 class="m-0 text-dark">Add Book</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Books</li>
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
                <h3 class="card-title">Add New Book</h3>
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
                      <h4 class="card-title">Edit BLog</h4>
                      <form method="post">
                          <div class="form-group">
                              <select name="category" class="js-example-basic-single form-control form-control-lg" style="width:100%">
                                  <option value="" selected><?php echo sqLx('category', 'sn', $ro['category'], 'title');  ?></option>
                                  <?php $result = $db->query("SELECT * FROM category ORDER BY title") or die();
                                  while ($row = mysqli_fetch_array($result)) {

                                      echo '<option value="' . $row['sn'] . '">' . $row['title'] . '</option>';
                                  }
                                  ?>


                              </select>
                          </div>
                          <div class="form-group">
                              <label>Title</label>
                              <div class="input-group col-xs-12">
                                  <input type="text" name="title" class="form-control form-control-lg" placeholder="Insert the Blog Title" value="<?php echo $ro['title'];  ?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="exampleTextarea1">Textarea</label>
                              <textarea name="detail" class="textarea" id="editor1" rows="4"><?php echo $ro['detail'];  ?></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2" name="updateBLog">Update</button>
                      </form>
                                        <?php }
                                    } else { ?>
                    <form method="post" class="row" enctype="multipart/form-data"> 
                      <div class="col-lg-12 form-group">
                      <label>Title</label>
                      <div class="input-group">
                       <input type="text" name="title" class="form-control form-control-lg" placeholder="Insert the Blog Title" required>
                      </div>
                    </div>
                    <div class="col-lg-6 form-group">
                      <label>Book Cover</label>
                      <div class="input-group">
                       <input type="file" name="photo" class="form-control form-control-lg">
                      </div>
                    </div>

                     <div class="col-lg-6 form-group">
                      <label>Book PDF</label>
                      <div class="input-group">
                       <input type="file" name="file" class="form-control form-control-lg">
                      </div>
                    </div>
                    <div class="col-lg-12 form-group">
                      <label for="exampleTextarea1">Summary Of Book</label>
                      <textarea name="subtitle" class="form-control" rows="4"></textarea>
                    </div>
                     <div class="col-lg-12 form-group">
                      <label for="exampleTextarea1">Detail Of Book</label>
                      <textarea name="detail" id="editor1" class="textarea" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="insertBook">Save</button>
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
                <h3 class="card-title">Recent Books </h3>
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

                        <!--                                             <th>Profile</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    $query = $db->query("SELECT * FROM book ORDER BY sn DESC") or die(mysqli_error());
                    while ($row = mysqli_fetch_array($query)) {
                        $e = $i++;

                    ?>
                        <tr>
                            <td> <?php echo $e ?> </td>
                            <td> <?php echo $row['title'] ?> </td>
                            <td> <?php echo $row['filename'] ?> </td>
                            <td> <?php echo userName($row['rep']) ?> </td>
                            <td> <?php echo date('j/M/y', strtotime($row['created'])) ?> </td>
                            <td> 
                              <button disabled class="btn btn-success">Completed</button>
                            </td>
                        </tr>
                    <?php } ?>
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
