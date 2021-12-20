<?php session_start(); ob_start();
if(isset($_GET['blog'])) {
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
  
    $blog = $_GET['blog'];
    $ssn = sqLx('blog','slug',$blog,'sn');
    $ue = $db->query("SELECT * FROM blog WHERE slug = '$blog' AND status = 1 ") or die(mysqli_error());
    if(mysqli_num_rows($ue)<=0){header('location: blog.php');}
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
							<h1><?php echo $row['title'] ; ?></h1>
							<p><a href="index.php">Home</a><span class="current-page">Article</span></p>
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
	
						<div class="col-lg-8 col-md-8 col-sm-12">
							<article class="blog-news big-detail-wrap">
								<div class="blog-detail-wrap">
								
									<!-- Featured Image -->
									<figure class="img-holder">
										<img src="portal/images/<?php echo $row['photo']; ?>" class="img-responsive" alt="News">
										<div class="blog-post-date theme-bg">
											<?php echo date('F j, Y' ,$row['ctime']); ?>
										</div>
									</figure>
									
									<!-- Blog Content -->
									<div class="full blog-content">
										<div class="post-meta">By: <a href="#" class="author theme-cl"><?php echo userName($row['rep']); ?></a> | 10 comment-detail </div>
										<a href="article.php"><h3><?php echo userName($row['title']); ?></h3></a>
										<div class="blog-text">
											<?php echo $row['detail']; ?>
											<div class="post-meta">Filed Under: <span class="category"><a href="#" class="theme-cl"><?php echo sqLx('category','sn',$row['category'],'title'); ?></a></span></div>
										</div>
										
										<!-- Blog Share Option -->
										<div class="no-mrg">
											<div class="blog-footer-social">
												<span>Share <i class="fa fa-share-alt"></i></span>
												<ul class="list-inline social">
													<?php include('sharebutton.php'); ?>
												</ul>
											</div>
										</div>
										
									</div>
									<!-- Blog Content -->
									
								</div>
							</article>
							
							<!-- Comment -->
							<?php 
							$com = $db->query("SELECT * FROM blogcomment WHERE blogid = $ssn ORDER BY sn DESC LIMIT 5 ") or die(mysqli_error());
							?>
							<div class="comment-wrap">
								<div class="comment-detail">      
									<div class="comment-detail-title">
										<h4>comment-detail (<?php echo mysqli_num_rows($com) ?>)</h4>
									</div>
									
									<ul id="singlecomment-detail" class="comment-detail-list">	
										 <?php 
                    
                 while($co = mysqli_fetch_array($com)){ 
                               ?>	
										<li class="comment" id="comment-56">
											<div class="comment">
												<div class="comment__image">

													<img alt="<?php echo ucwords($co['username']); ?>" src="portal/images/<?php echo $row['photo']; ?>" class="avatar avatar-75 photo" height="75" width="75">
												</div>
												<div class="comment__text">
													<h5><?php echo ucwords($co['username']); ?></h5>
													<span>
														<em><?php echo date('F j, Y' ,$co['ctime']); ?><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></em>
													</span>
													<p><?php echo $co['comment'] ?></p>
									
												</div>
												<hr>
											</div><!--end comment-->
										</li><!-- #comment-## -->
									<?php } ?>
									</ul>
									
								</div>
							</div>
							
							<div class="comment-detail-form" id="comment"> 
								<div class="section-title2">
									<h3 id="reply-title" class="comment-reply-title">Write a Comment
										<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
									</h3>
								</div>
								
										 <?php if(!$uid){ ?> 
                         <p class="comment-notes">Your email address will not be published. Required fields are marked</p> 
                         <?php } ?>
                        <form class="comment-form row" method="post" style="padding-top: 20px;">
                         <?php if($uid){ ?>
                           <div class="form-group col-md-12"> <input disabled class="form-control" value="<?php echo ucwords(userName($uid)) ?>"> </div>
                            <div class="form-group col-md-12"><textarea class="form-control" type="text" name="message" placeholder="Type a comment"  rows="5"></textarea></div>
                        <?php }else{ ?>
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                 <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                    <div class="form-group col-md-12"><textarea class="form-control" type="text" name="message" placeholder="Type a comment" rows="5"></textarea></div>
                    <?php } ?>
                    <div class="form-submit col-md-12"><button name="comment" type="submit" class="btn btn-info" style="float: right;">Comment</button></div>
                     </form>

							</div>
									
						</div>
						
						<!-- Sidebar Start -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="sidebar">
								
								<div class="side-widget">
									<div class="side-widget-header border-0">
										<h4><i class="ti-search"></i>Search Here</h4>
									</div>
									
									<div class="side-widget-body p-t-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search…">
											<span class="input-group-btn">
												<button type="button" class="btn btn-primary btn-lg">Go</button>
											</span>
										</div>
									</div>
								</div>
								
								<div class="side-widget">
									<div class="side-widget-header">
										<h4><i class="ti-check-box"></i>Latest Blogs</h4>
									</div>
									<div class="side-widget-body p-t-10">
										<div class="side-list">
											<ul class="side-blog-list">
												<?php
                                  $sida = $db->query("SELECT * FROM blog ORDER BY ctime DESC LIMIT 5 ") or die('Cannot Connect To server');
                                 while ($srow = mysqli_fetch_array($sida)) { ?>
												<li>
													<a href="article.php?blog=<?php echo $srow['slug']; ?>">
														<div class="blog-list-img">
															<img src="portal/images/<?php echo $srow['photo']; ?>" class="img-responsive" alt="">
														</div>
													</a>
													<div class="blog-list-info text-sm">
														<h6 style="font-size: 15px;"><a href="article.php?blog=<?php echo $srow['slug']; ?>"><?php echo $srow['title']; ?></a></h6>
														<div class="blog-post-meta" style="font-size:12px;">
															<span class="updated"><?php echo date('M j, Y',$srow['ctime']); ?></span> | <a href="#" rel="tag"><?php echo sqLx('category','sn',$srow['category'],'title'); ?></a>					
														</div>
													</div>
												</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="side-widget">
									<div class="side-widget-header">
										<h4><i class="ti-briefcase"></i>Top Categories</h4>
									</div>
									<div class="side-widget-body p-t-10 p-b-0">
										<div class="side-list">
											<ul class="category-list">
												  <?php
                                   $sn = 10;
                                  $sda = $db->query("SELECT * FROM category ORDER BY ctime DESC LIMIT 5 ") or die('Cannot Connect To server');
                                 while ($sow = mysqli_fetch_array($sda)) { ?>
												<li><a href="#"><?php echo $sow['title']; ?> <span><?php echo $sow['sn']; ?></span></a></li>
											<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
		

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

</html><?php  }else{header('loaction: blog.php');} ?>