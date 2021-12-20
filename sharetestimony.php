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
			<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/ser-1.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>Share Your Testimony</h1>
							<p><a href="index.php">Home</a><span class="current-page">Testimony</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			
			<!-- ============================ Who We Are Start ================================== -->
			<section>
				<div class="container">
						
						<div class="row">
							<div class="col-lg-8 col-md-8">
											<!-- Modal -->
											<?php if(isset($report)){echo $pro->Alert(); } ?>

						  	<div class="row">
						  		<div class="col-md-2"></div>
						  		<div class="col-md-8">
						  			<h4 class="text-center" style="padding: 10px;">What has god done for you <b>Share</b></h4>
									<form class="row contact_form" method="post">
	                                <div class="col-md-12 form-group p_star">
	                                    <input type="text" class="form-control" name="fullname" placeholder="Enter your fullname here">
	                                </div>
	                                <div class="col-md-12 form-group p_star">
	                                    <input type="email" name="email"  class="form-control" placeholder="Enter your Email">
	                                </div>
	                                <div class="col-md-12 form-group p_star">
	                                    <textarea name="message" rows="7"  class="form-control" placeholder="Write you testimony here..."></textarea>
	                                </div>
	                                <div class="col-md-12 form-group">
	                                    <button name="sharetestimony" type="submit" value="submit" class="btn btn-info btn-block"> Share Testimony</button>
	                                </div>
	                           		</form>
						  		</div>
						  	</div>
				
							</div>
							<div class="col-md-4">
									<div class="row">

										 <?php
										 $sql = $db->query("SELECT * FROM book ORDER BY RAND() LIMIT 1 ");
				                        while($row = mysqli_fetch_array($sql)){
				                        ?>
										<!-- Single Blog Grid -->
										<div class="col-lg-12 col-md-12">
											<div class="blog-grid-wrap mb-4">
												<div class="blog-grid-thumb">
													<a href="book.php?book=<?php echo $row['id']; ?>"><img src="portal/images/<?php echo $row['photo']; ?>" class="img-responsive" alt="" /></a>
												</div>
												<div class="blog-grid-content ">
													<h4 class="cnt-gb-title"><a href="book.php?book=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h4>
													<p><?php echo $row['subtitle'] ?></p>
												</div>
											</div>
										</div>
						<?php } ?>
									</div>					
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->

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