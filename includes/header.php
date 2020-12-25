<!-- header-start -->
<header>
<?php
   include('session.php');
?>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                          
                                            
                                            
                                            <li><a href="contact.php">Contact</a></li>
                                            <?php if(isset($_SESSION['login_user'])){?>

                                            <li><a href="#"><?php echo "Haii " . $v . "."; ?><i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">profile</a></li>
                                                        <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </li>
                                            <?php } else {?>
                                                <li><a href="#">Login <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="signup.php">Sign up</a></li>
                                                        <li><a href="login.php">Login</a></li>
                                                </ul><?php }?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> +91 9847156154</p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->