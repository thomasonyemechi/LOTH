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



              <section class="blog_area pt-5 pb-5 bg-light">
        <div class="container">
            <div id="refresh"><?php if (isset($report)) {
                                    echo $pro->Alert();
                                } ?></div>
            <div class="text-center" style="padding-bottom: 50px;">
                <h1><?php echo ucwords(userName($uid)) ?></h1>
                <h6>Passsword Reset</h6>
            </div>
            <div class="row">
           
                <div class="col-md-4 col-xs-4">
                    <?php include('profile.php'); ?>
                </div>

                <div class="col-md-8 col-xs-12">
                     <div class="tab-pane active" id="home">
                        <div class="steamline">
                            <div class="sl-item">
                                <div class="sl-right">
                                    <div class="card">
                                        <div class="card-body with-border">
                                            <form method="post">
                              
                                                    <div class="col-md-12">Current Password: </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="password" class="form-control" name="pwd" required />
                                                    </div>
                                                    <div class="col-md-12">New Password: </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="password" class="form-control" name="newpwd" required />
                                                    </div>
                                                    <div class="col-md-12">Confirm New Password: </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="password" class="form-control" name="retype" required />
                                                    </div>
                                                   

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info btn-lg" name="ChangeUserPassword">Change Password</button>
                                                
                                            </div>
                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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