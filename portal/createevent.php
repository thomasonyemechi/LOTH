<?php
session_start(); ob_start();
if (array_key_exists('edit', $_POST)) {
    $_SESSION['esn'] = $_POST['edit'];
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
            <h1 class="m-0 text-dark">Event Section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Event</li>
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
                  <?php if (!isset($_SESSION['esn'])) { echo 'Add New Event'; }else{echo 'Update Event';} ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div id="refresh"><?php if (isset($report)) { echo $pro->Alert(); } ?></div>

                <?php if (isset($_SESSION['esn'])) {
                    $id = $_SESSION['esn'];
                    $sql = $db->query("SELECT * FROM event WHERE sn='$id' ");
                    while ($ro = mysqli_fetch_array($sql)) {  ?>
                        <form class="comment-form row" method="post" enctype="multipart/form-data">

                        <div class="form-group col-md-6">
                            <label>Event Name</label>
                            <input type="text" name="title" value="<?php echo $ro['title'] ?>" class="form-control" placeholder="title" required>
                        </div>
                        <div class="form-group col-md-6" style="float: right">
                            <label>Display Picture</label>
                            <input type="file" name="photo" class="form-control" placeholder="photo">
                        </div>


                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event Start Date</label>
                                <input type="date" name="startdate" class="form-control" placeholder="Event Date" >
                            </div>

                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event End Date</label>
                                <input type="date" name="enddate" class="form-control" placeholder="Event Date">
                            </div>


                            <div class="form-group col-md-3 col-xs-3 col-6" >
                                <label>Event Start Time</label>
                                <input type="time" name="starttime" class="form-control" placeholder="Event Start Time">
                            </div>
                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event End Time</label>
                                <input type="time" name="endtime" class="form-control" placeholder="Event End Time">
                            </div>


                        <div class="form-group col-md-6">
                            <label>Event Location</label>
                            <input type="text" name="location" value="<?php echo $ro['location'] ?>" class="form-control" placeholder="Event Location" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Event Summary</label>
                            <input type="text" name="subtitle" value="<?php echo $ro['subtitle'] ?>" class="form-control" placeholder="Event Summary" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Event Details</label>
                            <textarea type="text" name="detail" class="textarea" placeholder="Event Detail"><?php echo $ro['detail'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger mr-2" name="deleteevent">Delete</button>
                            <button type="submit" class="btn btn-primary mr-2" name="updateevent">Update</button>
                    </form>
                    <?php }
                } else { ?>
                    <form class="comment-form row" method="post" enctype="multipart/form-data">

                        <div class="form-group col-md-6">
                            <label>Event Name</label>
                            <input type="text" name="title" class="form-control" placeholder="title" required>
                        </div>
                        <div class="form-group col-md-6" style="float: right">
                            <label>Display Picture</label>
                            <input type="file" name="photo" class="form-control" placeholder="photo" required>
                        </div>


                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event Start Date</label>
                                <input type="date" name="startdate" class="form-control" placeholder="Event Date" >
                            </div>

                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event End Date</label>
                                <input type="date" name="enddate" class="form-control" placeholder="Event Date">
                            </div>


                            <div class="form-group col-md-3 col-xs-3 col-6" >
                                <label>Event Start Time</label>
                                <input type="time" name="starttime" class="form-control" placeholder="Event Start Time">
                            </div>
                            <div class="form-group col-md-3 col-xs-3 col-6">
                                <label>Event End Time</label>
                                <input type="time" name="endtime" class="form-control" placeholder="Event End Time">
                            </div>


                        <div class="form-group col-md-6">
                            <label>Event Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Event Location" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Event Summary</label>
                            <input type="text" name="subtitle" class="form-control" placeholder="Event Summary" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Event Details</label>
                            <textarea type="text" name="detail" class="textarea" placeholder="Event Detail"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="createevent">Submit</button>
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
                <h3 class="card-title">Recent Event </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm">
                  <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Event Date</th>
                        <th>Rep</th>
                        <th>Date</th>
                        <th>Action</th>

                        <!--                                             <th>Profile</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    $query = $db->query("SELECT * FROM event ORDER BY sn DESC") or die(mysqli_error());
                    while ($row = mysqli_fetch_array($query)) {
                        $e = $i++;

                    ?>
                        <tr class="odd gradeX">
                            <td class="center"><?php echo $e; ?></td>
                            <td><?php echo ucwords($row['title']); ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['startdate']; ?></td>
                            <td><?php echo $pro->snToName($row['rep']); ?></td>
                            <td><?php echo date('j/M/Y', $row['ctime']); ?></td>

                            <form method="post">
                                <td><button name="edit" class="btn btn-primary" value="<?php echo $row['sn']; ?>">Edit</button></td>
                            </form>
                        </tr><?php }  ?>
                </tbody>
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
