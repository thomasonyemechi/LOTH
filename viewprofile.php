<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Timeline</title>
        
      <?php include('link.php');
if(isset($_SESSION['seachclient'])){ $fid=$_SESSION['seachclient']; }else{header('location: .');}
             if(isset($_GET['page'])){
  $page = $_GET['page'];
 }
 else{
  $page = 1;
 }
 $num_per_page = 10;
 $start_from = ($page-1)*10;
 
$sql = $db->query("SELECT * FROM timeline WHERE userid='$fid' AND status=1 ORDER BY sn DESC limit $start_from, $num_per_page");
//if page reload
   if (isset($_POST['q'])) {
    $q = $_POST['q'];
    $filter = $_POST['filter'];
    $sql = $db->query("SELECT * FROM timeline WHERE $filter LIKE '%$q%' AND userid='$fid' ORDER BY sn DESC");
    $report = mysqli_num_rows($sql)==0 ? 'search not found ' : 'Result found for ' . $q;
    }
       ?>
    </head>
    
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Unico</p>
            </div>
        </div>
        
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
        
          <?php include('nav.php');
           // include('breadcrumb.php'); 
          ?>



              <section class="blog_area pt-5 pb-5 bg-light">
        <div class="container">
            <div id="refresh"><?php if (isset($report)) {
                                    echo $pro->Alert();
                                } ?></div>
            <div class="text-center" style="padding-bottom: 50px;">
                <h3>You searched for <?php echo ucwords(userName($fid)) ?></h3>
            </div>
            <div class="row">
           
                <div class="col-md-4 col-xs-4">
                     <div class="card">
                    <div class="white-box">
                            <figure class="img-holder">
                                        <img width="100%" alt="user" src="admin/uphoto/<?php echo ucfirst(userName($fid, 'photo')) ?>"> 
                                    </figure>
                        <div class="user-btm-box">
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-6 col-6 b-r"><strong>Name</strong>
                                    <p><?php echo ucfirst(userName($fid)) ?></p>
                                </div>
                                <div class="col-md-6 col-6 "><strong>Category</strong>
                                    <p><?php echo ucfirst($pro->category(userName($fid, 'category'))) ?></p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr>
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-6 col-6 b-r"><strong>Email</strong>
                                    <p><?php echo userName($fid, 'email') ?></p>
                                </div>
                                <div class="col-md-6 col-6 "><strong>Phone</strong>
                                    <p><?php echo userName($fid, 'phone') ?></p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr>
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-12"><strong>Address</strong>
                                    <p><?php echo userName($fid, 'address') ?></p>
                                </div>
                            </div>
                            <hr>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-8 col-xs-12">
                     <div class="tab-pane active" id="home">
                                <div class="steamline">
                                    <div class="sl-item">
                                       
                                        <div class="sl-right">
                                            <?php 
                                                while ($row = mysqli_fetch_array($sql)){
                                             ?>
                                         <div class="card" style="margin-top: 30px;">
                                                    <div class="card-body with-border">
                                                     <ul id="singlecomment-detail" class="comment-detail-list pb-3 pl-5">  
                                                        <li class="comment" id="comment-56">
                                                            <div class="comment">
                                                                <div style="float: right;">
                                                                    <a class="" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                                          aria-expanded="false">
                                                                            <p style="float: right; font-weight: bolder;"><b>::</b></p>
                                                                      </a>
                                                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#del<?php echo $row['sn'] ?>">Mute Post</a>
                                                                      </div>

                                                                </div>
                                                                <div class="comment__image">
                                                                    <img alt="?ph" src="admin/uphoto/<?php echo ucwords(userName($row['userid'], 'photo')) ?>" class="avatar avatar-75 photo" height="75" width="75">
                                                                </div>
                                                            
                                                                <div class="comment__text" style="padding-right: 0px;">
                                                                    <h5><?php echo ucwords(userName($row['userid'])) ?></h5>
                                                                    <span>
                                                                        <em><?php echo get_time_ago($row['ctime']); ?></em>
                                                                    </span>   

                                                                </div>
                                                            </div><!--end comment-->
                                                        </li><!-- #comment-## -->
                                                    </ul>

                                                    <div class="m-l-40"> <p style="color: #000;"><?php echo $row['note'] ?></p>

                                                    <?php if($row['photo'] != ''){ ?>
                                                <div class="m-t-20 row"><img src="admin/timeline/<?php echo $row['photo'] ?>" alt="user" class="col-md-12 col-xs-12" /></div>
                                                <?php } ?>
                                                    
                                                <div class="row" style="padding-top: 10px;">
                                                    <div class="col-md-6  col-xs-6 col-6">
                                                        <i class="ti-heart" style="padding-right: 5px;"></i><span>You and 20 others</span>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <span>20 Comment</span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 col-4 text-center">
                                                        <i class="ti-heart" style="padding-right: 5px;"></i><span>Like</span>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 col-4 text-center">
                                                        <i class="ti-comment" style="padding-right: 5px;"></i><span>Comment</span>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 col-4 text-center">
                                                        <i class="ti-share" style="padding-right: 5px;"></i><span>Share</span>
                                                    </div>
                                                </div><hr>
                                            </div>
                                                    </div>
                                                </div>


                                            <div class="modal fade" id="del<?php echo $row['sn'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                              <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="">Deactivate Post</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    
                                                        <p>Are you sure you want to mute this Post</p>

                                                         <form method="post">
                                                        <button style="float: right;" name="mutestatus" value="<?php echo $row['id'] ?>" class="btn btn-danger">Mute</button> 
                                                    </form> 
                                                    
                                                  </div>
                                                 
                                                </div>
                                              </div>
                                            </div>

                                            <?php } ?>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                <?php 
    $que = $db->query("SELECT * FROM timeline WHERE userid='$fid' ");
    $total_record = mysqli_num_rows($que);
    $total_page = ceil($total_record/$num_per_page); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="bs-example">
                                <ul class="pagination">
                                            <li class="page-item disabled">
        <?php
          if($page>1){
        echo "<li><a href='timeline.php?page=".($page-1)."' class='btn btn-danger aria-disabled='true''><i class='ti-arrow-left'></i></a></li>"; 
          }
          
          for($i=1;$i<$total_page;$i++){
            echo "<li><a href='timeline.php?page=".$i."' class='btn btn-primary'>$i</a></li>";
          }

          if($i>$page){
            echo "<li><a href='timeline.php?page=".($page+1)."' class='btn btn-danger'><i class='ti-arrow-right'></i></a></li>"; 
          }

     ?>
        </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
        


<?php// include('modal.php') ?>

            <!-- ============================ Hero Banner  Start================================== -->

            <!-- ============================ Hero Banner End ================================== -->
            
            <!-- ============================ Footer Start ================================== -->
            <?php include('footer.php'); ?>
            <!-- ============================ Footer End ================================== -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-rating.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/slider-bg.js"></script>
        <script src="assets/js/lightbox.js"></script> 
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->


    </body>

<!-- Mirrored from codeminifier.com/unico-live-02/unico/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:54:28 GMT -->
</html>