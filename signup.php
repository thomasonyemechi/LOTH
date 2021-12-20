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
			        <section class="login_part section_padding bg-light" style="background-color: #fafafa;">
            <div class="container">
                <div class="row"><?php if(isset($report)){echo $pro->Alert();} ?>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-8 col-md-8" style="padding-top:10px;">
                        <h3 class="mb-30 text-center m-3">SignUp To <b>LOTH</b></h3>
                        <form method="post">
                            <div class="form-group row ">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" required placeholder="Firstname" name="firstname" style="border-color: #CCC;">
                                </div>

                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" name="lastname" required placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" required placeholder="Phone Number" name="phone">
                                </div>
                                <div class="col-md-6 ">
                                    <select class="form-control custom-select" name="age">
                                        <option selected disabled>Select Age Range...</option>
                                        <option value="1">Teenager (13-19) years</option>
                                        <option value="2">Youth (20-35) years</option>
                                        <option value="3">Adult ( > than 35) years</option>
                                    </select>
                                </div>
                            </div>
                            <b>Login Information</b>
                            <hr>
                            <div class="form-group row ">
                                <div class="col-md-12 ">
                                    <input class="form-control form-control" type="email" required placeholder="Email" name="email" id="usernamex">
                                    <div id="output2"></div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="password" required placeholder="Password" name="password" style="border-color: #CCC;">
                                </div>

                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="password" name="password2" required placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">I agree to the <a href="terms.php" target="blank">Terms & Condition</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center ">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-info" type="submit" name="InitialSignup">Sign Up</button>
                                </div>
                            </div>



                            <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    Already have an account? <a href="login.php" class="text-primary m-l-5 "><b>Login</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </section>
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