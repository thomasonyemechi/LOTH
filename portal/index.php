<?php
session_start(); ob_start();
$id = $_SESSION['user_idx'];
//$pack = 'UTME';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDGE</title>
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
    <?php header('location: projects.php'); ?>
  <?php //$pack = $_SESSION['regid']; ?>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php  $sql = $db1->query("SELECT * FROM result WHERE id='$uid' ");
                  $r = mysqli_num_rows($sql); echo $r; ?></h3>

                <p>Exams Taken</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>

           <?php
               $sqlo = $db1->query("SELECT * FROM result WHERE id='$uid' ORDER BY sn DESC"); 
                    while($row = mysqli_fetch_assoc($sqlo)) {
                  @$totalP += number_format($row['total']/$cbt->numRows('question','esn',$row['esn']),4)*100;}
                        echo @number_format($totalP/$r,1);
                        ?>
                  <sup style="font-size: 20px">%</sup></h3>

                <p>Total Score</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

                    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php 
                $s = $db1->query("SELECT * FROM practice WHERE id='$id' ") or die();
                          $row3 = mysqli_num_rows($s);
                         //$arr = explode($subjects);
                      echo $row3;

                      ?>
 </h3>  
                <p>Exams Practiced</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
     
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
                  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recent Test History</h3>
<!-- 
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>sn</th>
                      <th>Type</th>
                      <th>Year</th>
                      <th>Subject</th>
                      <th>Percentage</th>
                      <th>Time Spent</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php

                    $i=1;
                    $sql = $db1->query("SELECT * FROM result WHERE id='$uid' ORDER BY sn DESC LIMIT 7 "); 
                    while($row = mysqli_fetch_assoc($sql)) { $e = $i++;
                    

                    ?>

                    <tr>
                      <td><?php echo $e; ?></td>
                      <td><?php echo $row['pack']; ?></td>
                      <td><?php echo $cbt->fetCha('exam','sn',$row['esn'],'year'); ?></td>
                      <td><?php echo $cbt->getSub($row['esn']); ?></td>
                      <td><?php echo number_format($row['total']/$cbt->numRows('question','esn',$row['esn']),4)*100; ?>%</td>
                      <?php $t = number_format(($row['ctime']-$row['ctime2'])/60,2); if($row['ctime']==''){ ?>
                       <td> <p style="color: red;">Incomplete Test</p></td>
                      <?php }elseif($t<=60){ ?>
                        <td><span class="tag tag-warning"><?php echo $t; ?>mins</span></td>
                      <?php }else{ ?>
                      <td><span class="tag tag-warning"><?php echo number_format($t/60,2);  ?>hrs</span></td>
                    <?php } ?>
                    <td><?php echo date('j-M' ,$row['ctime2']); ?></td>
                    </tr>

                  <?php } ?>
                  <tr><td colspan="7"><h6 class="text-center"><a href="testhistory.php">View All <span class="ti-arrow-right"></span></a> </h6></td></tr>    
                  </tbody>
                </table>
              </div>
            </div>
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recent Practice History</h3>
<!-- 
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>sn</th>
                      <th>Type</th>
                      <th>Year</th>
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php

                    $i=1;
                    $sql = $db1->query("SELECT * FROM practice WHERE id='$uid' ORDER BY sn DESC LIMIT 7 "); 
                    while($row = mysqli_fetch_assoc($sql)) { $e = $i++;
               
                    ?>

                    <tr>
                      <td><?php echo $e; ?></td>
                      <td><?php echo $row['type']; ?></td>
                      <td><?php echo $cbt->fetCha('exam','sn',$row['esn'],'year'); ?></td>
                      <td><?php echo $cbt->getSub($row['esn']); ?></td>
                      <td><?php echo date('j-M-Y' ,$row['ctime']); ?></td>
                    </tr>
         
                  <?php } ?>
                  <tr><td colspan="5"><h6 class="text-center"><a href="practicehistory.php">View All <span class="ti-arrow-right"></span></a> </h6></td></tr>  
                  </tbody>
                </table>
              </div>
            </div>
              <!-- /.card-body -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
       <section class="col-lg-5">

            <!-- Map card -->
 

                 <?php 
                 $i=1;
                                        $sql = $db1->query("SELECT * FROM profile WHERE id='$id'  ") or die();
                                           while($row = mysqli_fetch_assoc($sql)){ $e=$i++;
                                             $subjects = json_decode($row['subject']); ?>
                                             
                             <div class="card">
            <div class="card-header">
                            <h3 class="card-title">My <?php echo $row['type']; ?> Subjects Combination</h3>
                          </div>
                          <div class="card-body" style="width: 100%; border-bottom: thin solid #CCC;">
                    <?php foreach ($subjects as $subject) {
    
?>        


  <span value="<?php echo $subject; ?>"><?php echo $cbt->snToSubject($subject); ?></span><br>
                     
                          
                                      <?php  } ?>                     
  </div>
  <footer>
     
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="start.php?type=<?php echo $row['type']; ?>" class="nav-link">
                  <p style="font-weight: bolder;">Practice <?php echo $row['type']; ?> Questions</p>
                </a>
              </li>
            </ul>
  </footer>
                      </div>
                       <?php }  ?>
              
 
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
