<?php session_start(); ob_start();
//if(isset($_GET['book'])) {
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>LOTH</title>
		<?php include('link.php') ?>
    </head>
	
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
		<?php include ('nav.php'); ?>
		 <?php 
  
    $book = $_GET['book'];
    $ue = $db->query("SELECT * FROM book WHERE id = '$book'") or die(mysqli_error());
    if(mysqli_num_rows($ue)<=0){header('location: book.php');}
    else{
        $row = mysqli_fetch_array($ue);
        $sn=$row['sn'];}
?>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			<div><?php if(isset($report)){echo $pro->Alert();} ?></div>
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(portal/images/<?php echo $row['photo']; ?>) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1><?php echo $row['title']; ; ?></h1>
							<small class="text-white"><?php echo $row['subtitle']; ?></small>
							<p><a href="index.php">Home</a><span class="current-page">Book</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Blog Grid Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
	
						<div class="col-lg-6 col-md-6 col-sm-12">
							<article class="blog-news big-detail-wrap">
								<div class="blog-detail-wrap">
								
									<!-- Featured Image -->
									<figure class="img-holder">
										<img src="portal/images/<?php echo $row['photo']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>">
									</figure>
								</div>
							</article>
							
						
						</div>
						
						<!-- Sidebar Start -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="sidebar">
								
									<div class="full blog-content">
										<h2 class="text-center"><?php echo $row['title']; ?></h2>
										<div class="blog-text">
											<?php echo $row['detail']; ?>
										</div>
										<p>Upload Date: <?php echo date('F j, Y' ,strtotime($row['created'])); ?></p>
										<form method="post">
											<?php if($pro->Uid()){ ?>
											<button type="submit" name="download" class="btn btn-lg btn-info">DownLoad</button>
										<?php }else{ ?>
											<a href="download.php" class="btn btn-info"  data-toggle="modal" data-target="#login">Download</a>
										<?php } ?>
										</form>
									</div>


							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
		

			<!-- ============================ Footer Start ================================== -->
			<?php include ('modal.php'); include ('footer.php'); ?>
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

</html><?php//  }else{header('loaction: book.php');} ?>