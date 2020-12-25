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
                                    <a href="adminindex.html">
                                        <img src="img/logo3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="adminindex.php">home</a></li>
                                            <li><a href="">Package</a>
                                            <ul class="submenu">
                                            <li><a href="add_package.php">Add Package</a></li>
                                            <li><a href="view_packages.php">View Packages</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="user_view.php">Users</a></l/li>
                                            <li><a href="enquiry_view.php">Enquiry</a></l/li>
                                            <li><a href="newbookings.php">New Booking</a></l/li>
                                           

                                         
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                             
                                    <div class="number">
                                      <a href="report.php" <h5>Report</h5></a>
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