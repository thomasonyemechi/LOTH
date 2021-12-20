<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Blog</title>
		<?php include('link.php') ?>
    </head>
	
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
		<?php include('nav.php');

		 if(isset($_GET['page'])){
  $page = $_GET['page'];
 }
 else{
  $page = 1;
 }
 $num_per_page = 10;
 $start_from = ($page-1)*10;
 
$sql = $db->query("SELECT * FROM blog WHERE status='1' ORDER BY sn DESC limit $start_from, $num_per_page");
//if page reload

   if (isset($_POST['q'])) {
    $q = $_POST['q'];
    $filter = $_POST['filter'];
    $sql = $db->query("SELECT * FROM blog WHERE $filter LIKE '%$q%' AND status='1' ORDER BY sn DESC");
    $report = mysqli_num_rows($sql)==0 ? 'search not found ' : 'Result found for ' . $q;
    }

	?>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/ser-1.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>Our Latest Blog</h1>
							<p><a href="index.php">Home</a><span class="current-page">Blog</span></p>
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

						 <?php
                        while($row = mysqli_fetch_array($sql)){
                        ?>
						<!-- Single Blog Grid -->
						<div class="col-lg-6 col-md-6">
							<div class="blog-grid-wrap mb-4">
								<div class="blog-grid-thumb">
									<a href="article.php?blog=<?php echo $row['slug']; ?>"><img src="portal/images/<?php echo $row['photo']; ?>" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<h6><?php echo ucwords(sqLx('category','sn',$row['category'],'title')); ?></h6>
										<span><?php echo get_time_ago($row['ctime']) ?></span>
									</div>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="article.php?blog=<?php echo $row['slug']; ?>"><?php echo $row['title'] ?></a></h4>
									<p><?php echo $row['subtitle'] ?></p>
								</div>
								<div class="blog-grid-meta" style="float: right;">
									<div class="gb-info-cmt">
										<ul>
											<p><strong>By </strong><?php echo ucwords(userName($row['rep'])) ?></p>
										</ul>
									</div>
								</div>
							</div>
						</div>
		<?php } ?>
						
					</div>

					<?php 
    $que = $db->query("SELECT * FROM blog");
    $total_record = mysqli_num_rows($que);
    $total_page = ceil($total_record/$num_per_page); ?>

					<div class="row">
						<div class="col-md-12">
							<div class="bs-example">
								<ul class="pagination">
									        <li class="page-item disabled">
        <?php
          if($page>1){
        echo "<li><a href='blog.php?page=".($page-1)."' class='btn btn-danger aria-disabled='true''><i class='ti-arrow-left'></i></a></li>"; 
          }
          
          for($i=1;$i<$total_page;$i++){
            echo "<li><a href='blog.php?page=".$i."' class='btn btn-primary'>$i</a></li>";
          }

          if($i>$page){
            echo "<li><a href='blog.php?page=".($page+1)."' class='btn btn-danger'><i class='ti-arrow-right'></i></a></li>"; 
          }

     ?>
        </li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
			
			
			

			<!-- ============================ Footer Start ================================== -->
			<?php include('footer.php'); ?>
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