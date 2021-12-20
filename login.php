<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>LOTH</title>
        <?php include('link.php'); ?>
    </head>
	
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
		<?php include ('nav.php'); ?>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			
			<!-- ============================ Who We Are Start ================================== -->
				<div class="container">
					
					<div class="row">
						<div class="col-lg-3 col-md-3"></div>
						<div class="col-lg-6 col-md-6">
										<!-- Modal -->
										<?php if(isset($report)){echo $pro->Alert(); } ?>
			<div class="" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">

					<div class="modal-content" id="registermodal">
					  <div class="modal-body">
					  	<h4 class="text-center" style="padding: 10px;">Login to start your session</h4>
					  	<?php
					  	//$string = 'samuel esther';
					  	//echo substr_count($string, ' ');
					  	 ?>
						<form class="row contact_form" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="email" placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" name="password"  class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <ul class="no-ul-list mb-2">
										<li>
											<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
											<label for="checkbox-1" class="checkbox-custom-label">Remember me</label>
										</li>
									</ul>
                                    </div>
                                    <button name="LoginUsers" type="submit" value="submit" class="btn btn-info btn-block"> log in</button>
                                        <a class="lost_pass" href="forgotpassword.php">forgot password?</a>
                                </div>
                                 <div class="col-sm-12 text-center ">
                                    Not yet Signed up? <a href="signup.php" class="text-primary m-l-5"><b>Sign Up</b></a>
                                </div>
                           </form>
					  </div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
						</div>
						
					</div>
					
				</div>
			<!-- ============================ Who We Are End ================================== -->

			<!-- ============================ Sign up End ================================== -->

			<!-- ============================ Footer Start ================================== -->
			<?php include ('footer.php');?>
			<!-- ============================ Footer End ================================== -->
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<!--Bootstrap js-->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!--Bootstrap slider js-->
		<script src="bootstrap/js/bootstrap-slider.min.js"></script>
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