<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Timeline</title>
        
      <?php include('link.php');

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
            include('breadcrumb.php'); 
          ?>
<aside>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?php echo ucwords(userName($pro->Uid())); ?></p>
                    <p class="designation">Administrator</p>
                </div>
            </a>
        </li>
    </ul>
</nav>
</aside>
              <section class="blog_area pt-5 pb-5 bg-light">
        <div class="container">
            <div id="refresh"><?php if (isset($report)) {
                                    echo $pro->Alert();
                                } ?></div>
            <div class="row">
           

                <div class="col-md-8 col-xs-12">
                 <!--     <div class="tab-pane active" id="home">
                        <div class="steamline">
                            <div class="sl-item">
                                <div class="sl-right">
                                    <div class="card">
                                        <div class="card-body with-border">
                                            <button class="btn btn-info"  data-toggle="modal" data-target="#editprofile">Edit Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
        
<?php include('modal.php') ?>
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
n        <script src="assets/js/aos.js"></script>
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

</html>