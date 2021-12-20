<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Timeline</title>
        
      <?php include('link.php');

?>
<style type="text/css">
    .col-md-6{
        padding: 10px;
    }
</style>
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
                <h6>Profile</h6>
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
                                            <div class="row"><?php $id = $_SESSION['user_idx']; ?>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <B class="text-dark">Firstname</B><span class="pull-right"><?php echo ucwords(userName($id, 'firstname')) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Lastname</B><span class="pull-right"><?php echo ucwords(userName($id, 'lastname')) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Category</B><span class="pull-right"><?php echo ucwords($pro->category(userName($id, 'category'))) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Phone</B><span class="pull-right"><?php echo userName($id, 'phone') ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Date of Birth</B><span class="pull-right"><?php echo userName($id, 'dob') ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Gender</b><span class="pull-right"><?php echo userName($id, 'sex') ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Contry</b><span class="pull-right"><?php echo ucwords(userName($id, 'email')) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Contry</b><span class="pull-right"><?php echo ucwords(userName($id, 'country')) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">City</b><span class="pull-right"><?php echo ucwords(userName($id, 'city')) ?></span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <b class="text-dark">Address</b><span class="pull-right"><?php echo ucwords(userName($id, 'address')) ?></span>
                                                </div>
                                                <div class="col-md-12 col-xs-12 col-12">
                                                    <b class="text-dark text-center">Bio</b><br><span class=""><?php echo ucwords(userName($id, 'bio')) ?></span>
                                                </div>
                                                <div class="col-md-4 col-xs-4 col-4"></div>
                                                    <button class="btn btn-info"  data-toggle="modal" data-target="#editprofile">Edit Profile</button>
                                                
                                            </div>
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

</html>