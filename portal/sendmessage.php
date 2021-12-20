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
            <h1 class="m-0 text-dark">Send Mail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Mail</li>
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
<div id="refresh"><?php if (isset($report)) {  echo $pro->Alert();  } ?></div>
            <!-- /.card -->
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                Send Mail
               </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <div class="card-body">
                                    <div id="refresh"><?php if (isset($report)) { echo $pro->Alert(); } ?></div>
                                       <h4 class="card-title">SEND MAIL TO MULTIPLE USERS</h4>   
  <div class="container container-table pb-5">
    <form method="post"><br>
 RECIPIENT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label><input type="radio" name="rec" value="1" required>  ONLY ACTIVE USERS</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label><input type="radio" name="rec" value="2">  ALL USERS</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label><input type="radio" name="rec" value="3">  NON ACTIVE USERS</label>
      <input type="text" name="subject" class="form-control" placeholder="E-MAIL SUBJECT"><br>
 E-MAIL BODY <textarea class="textarea" name="msg"  placeholder="Type message here..."></textarea>

<br>
<button type="submit" name="SendMail" class="btn btn-primary form-control-lg" >SEND MAIL TO SELECTED RECIPIENTS</button>  
    </form>
    </div>
              

<hr>

<div class="container container-table pt-5">
    <h4 class="card-title">SEND MAIL TO SPECIFIC USERS</h4>
    <form method="post"><hr>
 RECIPIENTS: 
      <input type="text" name="rec" class="form-control" placeholder="RECIPIENTS">
      <em>Separate multiple emails with comma.</em><br>
      <input type="text" name="subject" class="form-control" placeholder="E-MAIL SUBJECT"><br>
 E-MAIL BODY <textarea class="textarea" name="msg"  placeholder="Type message here..."></textarea>

<br>
<button type="submit" name="SendMail2" class="btn btn-primary form-control-lg" >SEND MAIL TO SELECTED RECIPIENTS</button>  
    </form>
    </div>


<br><br>
<hr>

<div class="container container-table pt-5">
    <h4 class="card-title">SEND MAIL TO NEWSLETTER</h4>
    <form method="post">
      <input type="text" name="subject" class="form-control" placeholder="E-MAIL SUBJECT"><br>
 E-MAIL BODY <textarea class="textarea" name="msg"  placeholder="Type message here..."></textarea>

<br>
<button type="submit" name="SendMail3" class="btn btn-primary form-control-lg" >SEND MAIL TO NEWSLETTER</button>  
    </form>
    </div>
                            </div>
            </div>


            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
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
