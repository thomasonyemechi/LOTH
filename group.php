<?php session_start(); ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Community</title>
        
      <?php include('link.php'); ?>
    </head>
    
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
  <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
        
          <?php   
                     if(isset($_GET['page'])){
  $page = $_GET['page'];
 }
 else{
  $page = 1;
 }
 $num_per_page = 30;
 $start_from = ($page-1)*30;
 include('nav.php'); ?>
          <?php include('breadcrumb.php'); ?>


              <section class="blog_area bg-light">
        <div class="container">
            <div id="refresh"><?php if (isset($report)) {
                                    echo $pro->Alert();
                                } ?></div>
            <div class="text-center" style="padding-bottom: 50px;">
                <h1><?php echo ucfirst($pro->category(userName($uid, 'category'))) ?> Group</h1>
            </div>
            <div class="row">
           
               <div class="col-md-2 col-xs-2"></div>

                <div class="col-md-8 col-xs-12">
                     <div class="tab-pane active" id="home">
                                <div class="steamline">
                                    <div class="sl-item">
                                       
                                        <div class="sl-right">
                                        <div class="card">
                                        <div class="sl-left"> 
                                        <form>
                                        <div style="padding: 30px;">
                                        <input type="button" class="form-control" name="butt" value="Share Something, <?php echo ucwords(userName($uid)) ?>" style="width: 100%;" data-toggle="modal" data-target="#modelId">
                                        </div>
                                        </form>
                                         </div>
                                         </div>
                                            <?php 
                                            $cat = userName($uid, 'category');
                                                $sql =$db->query("SELECT * FROM timeline WHERE category='$cat' AND status=1 ORDER BY sn DESC ");
                                                while ($row = mysqli_fetch_array($sql)){
                                             ?>
                                         <div class="card" style="margin-top: 30px;">
                                                    <div class="card-body with-border">
                                                     <ul id="singlecomment-detail" class="comment-detail-list pb-3 pl-5">  
                                                        <li class="comment" id="comment-56">
                                                            <div class="comment">
                                                                
                                                                <div class="comment__image">
                                                                    <img class="img-xs rounded-circle" alt="<?php echo ucwords(userName($row['userid'])) ?>" src="portal/uphoto/<?php echo ucwords(userName($row['userid'], 'photo')) ?>" class="avatar avatar-75 photo" height="75" width="75">
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
                                                        
                                                <div class="m-t-20 row"><img src="portal/timeline/<?php echo $row['photo'] ?>" alt="user" class="col-md-12 col-xs-12" /></div>
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

                                            <?php } ?>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                                        <?php 
    $que = $db->query("SELECT * FROM timeline WHERE category='$cat' ORDER BY sn DESC ");
    $total_record = mysqli_num_rows($que);
    $total_page = ceil($total_record/$num_per_page); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="bs-example">
                                <ul class="pagination">
                                            <li class="page-item disabled">
        <?php
          if($page>1){
        echo "<li><a href='group.php?page=".($page-1)."' class='btn btn-danger aria-disabled='true''><i class='ti-arrow-left'></i></a></li>"; 
          }
          
          for($i=1;$i<$total_page;$i++){
            echo "<li><a href='group.php?page=".$i."' class='btn btn-primary'>$i</a></li>";
          }

          if($i>$page){
            echo "<li><a href='group.php?page=".($page+1)."' class='btn btn-danger'><i class='ti-arrow-right'></i></a></li>"; 
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
   
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="">Create Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body" style="padding: 0px;">
        <form method="post" enctype="multipart/form-data">
            <textarea name="note" class="form-control"></textarea>

            <div class="modal-footer" style="padding: 0px;">
            <input type="file" name="photo" class="form-control" multiple  style="border-radius:50px;"/>
            <button class="btn btn-secondary" name="postStatus"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>   
            </div>
        </form>
      </div>
      <div class="modal-footer">
            
      </div>
    </div>
  </div>
</div>
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