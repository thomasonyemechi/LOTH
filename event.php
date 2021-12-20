<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Event</title>
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
 
$sql = $db->query("SELECT * FROM event ORDER BY sn DESC limit $start_from, $num_per_page");
//if page reload

   if (isset($_POST['q'])) {
    $q = $_POST['q'];
    $filter = $_POST['filter'];
    $sql = $db->query("SELECT * FROM event WHERE $filter LIKE '%$q%' ORDER BY sn DESC");
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
							<h1>Upcomming Event</h1>
							<p><a href="index.php">Home</a><span class="current-page">Event</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Blog Grid Start ================================== -->
			<?php if(!isset($_GET['event'])){ ?>
			<section>
				<div class="container">
					
					<div class="row">

						 <?php
                        while($row = mysqli_fetch_array($sql)){
                        ?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="event.php?event=<?php echo sha1($row['sn']); ?>"><img src="portal/images/<?php echo $row['flyer']; ?>" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="">
											<h5 class="pm-date text-center" style="font-size: 10px; background-color: black; color: white;">Date: <?php 
											echo $row['startdate']; if(!$row['enddate']==''){echo ' to '.$row['enddate'];}  ?></h5>
											<h5 class="pm-date text-center" style="font-size: 10px; background-color: red; color: white;">Time: <?php 
											echo $row['starttime']; if(!$row['endtime']==''){echo ' to '.$row['endtime'];}  ?></h5>
										</div>
									</div>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="event.php?event=<?php echo sha1($row['sn']); ?>"><?php echo $row['title'] ?></a></h4>
									 <ul class="blog-info-link pb-1">
                                        <li><a><i class="far fa-map-marker"></i><?php echo $row['location']; ?></a></li>
                                    </ul>
									<p><?php echo substr($row['subtitle'], 0,55) ?></p>
								</div>
							</div>
						</div>
						
		<?php } ?>
						
					</div>

					<?php 
    $que = $db->query("SELECT * FROM event");
    $total_record = mysqli_num_rows($que);
    $total_page = ceil($total_record/$num_per_page); ?>

					<div class="row">
						<div class="col-md-12">
							<div class="bs-example">
								<ul class="pagination">
									        <li class="page-item disabled">
        <?php
          if($page>1){
        echo "<li><a href='event.php?page=".($page-1)."' class='btn btn-danger aria-disabled='true''><i class='ti-arrow-left'></i></a></li>"; 
          }
          
          for($i=1;$i<$total_page;$i++){
            echo "<li><a href='event.php?page=".$i."' class='btn btn-primary'>$i</a></li>";
          }

          if($i>$page){
            echo "<li><a href='event.php?page=".($page+1)."' class='btn btn-danger'><i class='ti-arrow-right'></i></a></li>"; 
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
		<?php }else{
			$event= $_GET['event'];
			$evn =  $db->query("SELECT * FROM event WHERE sha1(sn)='$event' ");
			$ro = mysqli_fetch_array($evn);
		 ?>

			<section>
				<div class="row">
					<div class="col-md-2"></div><div class="col-md-8">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class=""><?php echo $ro['title'] ?></h5><br>

                                        </div>
                                        <div class="modal-body">

                                            <div class="container-fluid">
                                                <ul class="blog-info-link pb-1">
                                                    <li><a><i class="far fa-calendar"></i><?php echo $ro['edate'] ?></a></li>
                                                    <li><a><i class="far fa-map-marker"></i><?php echo $ro['location'] ?></a></li>
                                                </ul>
                                                <?php echo $ro['detail'] ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <ul class="blog-info-link pb-1">
                                                <li><a><i class="far fa-user"></i><?php echo ucfirst(userName($ro['rep'])); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
					</div>
				</div>
			</section>
		<?php } ?>
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