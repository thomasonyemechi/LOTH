<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Unico Multipurpose HTML Template</title>
		
      <?php include('link.php'); ?>
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
		
          <?php include('nav.php'); ?>



              <section class="blog_area pt-5 pb-5 bg-light">
        <div class="container">
            <div id="refresh"><?php if (isset($report)) {
                                    echo $pro->Alert();
                                } ?></div>
            <div class="text-center" style="padding-bottom: 50px;">
                <h1><?php echo ucwords(userName($uid)) ?></h1>
            </div>
            <div class="row">
           
                <div class="col-md-4 col-xs-4">
                 <div class="card">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="admin/images/1954882.jpg"> </div>
                        <div class="user-btm-box">
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-6 col-sm-6 b-r"><strong>Name</strong>
                                    <p><?php echo ucfirst(userName($uid)) ?></p>
                                </div>
                                <div class="col-md-6 col-sm-6 "><strong>Category</strong>
                                    <p><?php echo userName($uid, 'category') ?></p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr>
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-6 col-sm-6 b-r"><strong>Email ID</strong>
                                    <p><?php echo userName($uid, 'email') ?></p>
                                </div>
                                <div class="col-md-6 col-sm-6 "><strong>Phone</strong>
                                    <p><?php echo userName($uid, 'phone') ?></p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr>
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                                <div class="col-md-12"><strong>Address</strong>
                                    <p><?php echo userName($uid, 'address') ?></p>
                                </div>
                            </div>
                            <hr>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-8 col-xs-12">
                     <div class="tab-pane active" id="home">
                                <div class="steamline">
                                    <div class="sl-item">
                                       
                                        <div class="sl-right">
                                        <div class="card">
                                        <div class="sl-left"> 
                                        <form>
                                        <div style="padding: 30px;">
                                        <input type="button" class="form-control" name="butt" value="Share Something, <?php echo ucwords(userName($uid)) ?>" style="width: 100%;" data-toggle="modal" data-target="#modelId">
                                        </div>
                                        </form>
                                         </div>
                                         </div><br><br>
                  							

                  							<?php 
 												$sql = ()
                  							 ?>
                                         <div class="card">
                                                    <div class="card-body with-border">
                                                     <ul id="singlecomment-detail" class="comment-detail-list pb-3 pl-5">  
                                                        <li class="comment" id="comment-56">
                                                            <div class="comment">
                                                                <div class="comment__image">
                                                                    <img alt="?ph" src="admin/uphoto/<?php echo userName($uid, 'photo') ?>" class="avatar avatar-75 photo" height="75" width="75">
                                                                </div>
                                                                <div class="comment__text" style="padding-right: 0px;">
                                                                    <h5><?php echo ucwords(userName($uid)); ?></h5>
                                                                    <span>
                                                                    	<em>is felling tooo spiritual </em><br>
                                                                        <em><?php echo get_time_ago(strtotime(userName($uid, 'created'))); ?></em>
                                                                    </span>                                    
                                                                </div>
                                                            </div><!--end comment-->
                                                        </li><!-- #comment-## -->
                                                    </ul>

                                                    <div class="m-l-40"> <p style="color: #000;">assign a new task Design weblayout what is going in that mystic heart my head is on thewater but i am breathing fine
                                                    you are carzy nd out of my min cos all of me loves all of you loves all you curves and all you edges all your perfect imperfection</p>
                                                <div class="m-t-20 row"><img src="admin/images/1954896.jpg" alt="user" class="col-md-12 col-xs-12" /></div>
                                                    
                                                <div class="row" style="padding-top: 10px;">
                                                    <div class="col-md-6  col-xs-6">
                                                        <i class="ti-heart" style="padding-right: 5px;"></i><span>You and 20 others</span>
                                                    </div>
                                                    <div class="col-md-6  col-xs-6">
                                                        <span>20 Comment</span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 text-center">
                                                        <i class="ti-heart" style="padding-right: 5px;"></i><span>Like</span>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 text-center">
                                                        <i class="ti-comment" style="padding-right: 5px;"></i><span>Comment</span>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 text-center">
                                                        <i class="ti-share" style="padding-right: 5px;"></i><span>Share</span>
                                                    </div>
                                                </div><hr>
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
			
				<ul class="nav-menu nav-menu-social align-to-right">
								<li class="add-listing theme-bg">
									<a href="#" href="#" data-toggle="modal" data-target="#getstarted">Sign Up</a>
								</li>
							</ul>
							                                                           <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="">Create Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body" style="padding: 0px;">
      	<form method="post">
      		<textarea class="form-control"></textarea>

      		<div class="modal-footer" style="padding: 0px;">
      		<input type="file" name="photo[]" class="form-control" multiple  style="border-radius:50px;"/>
			<button class="btn btn-secondary" name="postStatus"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>	
			</div>
      	</form>
      </div>
      <div class="modal-footer">
	      	
      </div>
    </div>
  </div>
</div>
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