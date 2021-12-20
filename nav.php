
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <div class="header header-dark shadow">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href=".">
                        <img src="img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                    
                        <li class="active"><a href="index.php">Home<span class="submenu-indicator"></span></a>
                           
                        
                    
                        
                        <li><a href="blog.php">Blog<span class="submenu-indicator"></span></a>
                           
                        </li>

                          <li>
                             <li><a href="#">Events<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                     <li><a href="event.php">Upcomming Event</a></li>
                                    <li><a href="event.php">Past Event</a></li>
                                </ul></li>
                        </li>
                         
                        <li><a href="about.php">About Us<span class="submenu-indicator"></span></a>
                            
                        </li>

                        <li><a href="contact.php">Contact Us<span class="submenu-indicator"></span></a>
                           
                        </li>
                    </ul>
                    
                    <ul class="nav-menu  align-to-right">
                        <?php if(!$pro->Uid()){ ?>
                        <li> 
                            <a href="login.php">Log In<span class="submenu-indicator"></span></a>
                            <a href="signup.php">Sign Up<span class="submenu-indicator"></span></a>
                        </li>
                        <?php }else{ ?>
                        <li>
                            <a href="logout.php">Log Out</a>
                             <li><a href="#"><?php echo ucwords($pro->userName('firstname')); ?><span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                 <!--    <li><a href="timeline.php/<?php// echo $pro->slug(userName($uid)) ?>/">Timeline</a></li> -->
                                     <li><a href="timeline.php">Timeline</a></li>
                                    <li><a href="group.php">Community</a></li>
                                </ul></li>
                        </li>
                    <?php } ?>



                                   
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>