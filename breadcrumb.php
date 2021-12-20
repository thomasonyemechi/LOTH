<?php include('check.php'); ?>
<nav class="breadcrumb">
  <a class="breadcrumb-item" href="group.php">Home</a>
  <a class="breadcrumb-item" href="timeline.php">Timeline</a>
  <a class="breadcrumb-item" href="chat/">Chats</a>
  <a class="breadcrumb-item" href="#">
  	<div class="btn-group">
  <a class="dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
        Account
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
  	<a class="dropdown-item" href="me.php?.<?php echo $pro->slug2(userName($uid)); ?>">Profile</a>
  	<a class="dropdown-item" href="support.php">Support</a>
  	<a class="dropdown-item" href="sharetestimony.php"> Testimony</a>
    <a class="dropdown-item" href="password.php">Passwords</a>
     <?php
    if ($pro->adminlevel() == TRUE) {
    ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" target="_blank" href="portal/dashboard.php">Administrator</a>
     <?php } ?>
  </div>
</div>
</a>
</nav>