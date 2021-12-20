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
            <h1 class="m-0 text-dark">Add Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administrator </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php if(isset($report)){echo $pro->Alert(); } if(userName($_SESSION['user_idx'],'sn')==1){}else{header('location: .'); } ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

          <div class="card">
          <div class="card-body">
            <strong style="float: left">Search User by Email And Click Add</strong>
              <div style="float: right;">
                  <form method="post">

                      <table>
                          <tr>
                              <td><input type="email" name="email" class="form-control" placeholder="search By E-mail" required></td>
                              <td><button type="submit" name="searchclient2" class="btn btn-warning btn-block">Search</button></td>
                          </tr>
                      </table>
                  </form>
              </div>
          </div>
      </div>


                         <?php if(isset($_POST['searchclient2'])){
                        $email = $_POST['email'];
                        $sql = $db->query("SELECT * FROM user WHERE email='$email' ");
                        $row = mysqli_fetch_array($sql);
                        $client= $row['id'];
                        if(mysqli_num_rows($sql)==1){
                    ?>
                    <div class="card card-primary">
                             <div class="card-header">
                             <h2 class="card-title"><?php echo ucfirst(userName($client)) ?> 
                             <span style="padding-left: 5px;">(<?php echo $pro->category(ucfirst(userName($client,'category'))) ?>)</span></h2>
                    </div>
                                <div class="card-body">
                        
                        <div class="row">
                          <div class="col-md-4 col-6">
                  <strong>Full Name</strong>
                   <p class="text-muted">
                    <?php echo ucwords(userName($client, 'firstname')); echo ' '; echo ucwords(userName($client, 'lastname')) ?>
                   </p>
                   <hr>
                 </div>
                 <div class="col-md-4 col-6">
                  <strong> Email</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'email') ?>
                   </p>
                   <hr>
                 </div> 
                 <div class="col-md-4 col-6">
                  <strong> Sex</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'sex') ?>
                   </p>
                   <hr>
                 </div>
                 <div class="col-md-4 col-6">
                  <strong> Phone Number</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'phone') ?>
                   </p>
                   <hr>
                 </div>
                 <div class="col-md-4 col-6">
                  <strong> Date Of Birth</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'dob') ?>
                   </p>
                   <hr>
                 </div>
                 <div class="col-md-4 col-6">
                  <strong> Residential Address</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'address') ?>
                   </p>
                   <hr>
                 </div>
                 <div class="col-md-12 col-12">
                  <strong> Biography</strong>
                   <p class="text-muted">
                       <?php echo userName($client, 'bio') ?>
                   </p>
                   <hr>
                   <p class="text-center" >
                                    <a class="btn btn-info" href="../viewprofile.php">View Profile</a>
                                    <a class="btn btn-success" href="updaterole.php" data-toggle="modal" data-target="#updatecategory">Update Role</a></p>
                 </div>
                                
                            </div>
                        </div>
                      </div>
  
                                        <!-- Modal -->
<div class="modal fade" id="updatecategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Update <?php echo ucfirst(userName($client)) ?> Role</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label><input type="radio" name="rec" value="1">User</label> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <label><input type="radio" name="rec" value="2">Blogger</label> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <label><input type="radio" name="rec" value="3">Administrator</label>
            </div>
            <button name="updaterole" value="<?php echo $client; ?>" class="btn btn-block btn-primary">Save</button>
        </form>
      </div>
  </div>
    </div>
</div> 


                <?php }else{ ?>
                    <h4 class="text-center">Search not found for <?php echo $_POST['email']; ?></h4>
            <?php    } }else{ ?>

                    <div class="row">
                       <div class="col-md-12">
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
                        <th>Full Name</th>
                         <th>Email</th>
                         <th>Category</th>
                         <th>Level</th>
                         <th>Joined</th>

<!--                                             <th>Profile</th>-->
                  </tr>
                </thead>
                <tbody>
               <?php  $i=1;
                  $query=$db->query("SELECT * FROM user WHERE type>1 ORDER BY sn DESC" )or die(mysqli_error());
                  while($row=mysqli_fetch_array($query)){
                  $e=$i++;
                  
                  ?>          
              <tr class="odd gradeX">
                       <td class="center"><?php  echo $e; ?></td>
                       <td><?php  echo ucwords(userName($row['id'])); ?></td>
                       <td><?php  echo $row['email']; ?></td>
                       <td><?php  echo ucwords($pro->category($row['category'])); ?></td>
                       <td><?php  echo ucwords($pro->type($row['type'])); ?></td>
                       <td><?php  echo date('F j, y',strtotime($row['created'])); ?></td>
                  </tr><?php }  ?>
                </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>



                                     
                                    </div>
                    </div>

                <?php } ?>

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

<!-- Modal -->
<div class="modal fade" id="updatecategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Update <?php echo ucfirst(userName($client)) ?> Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label><input type="radio" name="rec" value="1">TEENAGEAR</label> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <label><input type="radio" name="rec" value="2">YOUTH</label>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <label><input type="radio" name="rec" value="3">ADULT</label>
            </div>
            <button name="updatecat" class="btn btn-block btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
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
