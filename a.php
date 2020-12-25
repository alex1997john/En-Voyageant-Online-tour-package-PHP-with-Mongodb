<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->

    <!--== Header Area End ==-->
    <br><br><br><br><br><br>
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>ADD A CAR </h3>
							<form action="addcarprocess.jsp">
							
                                <div class="regno">
                                    <input type="text" name="regno" placeholder="Enter register number" required>
								</div>
								<div class="cartype">
									<select class="select" name="station" >
									<option selected>Enter Car Station</option>
                                      <option value="Koramangala">Koramangala</option>
                                      <option value="Electronacity">Electronacity</option>
                                      <option value="Hennur">Hennur</option>
                                      <option value="Madiwala">Madiwala</option>
									</select>
									<style>
									.select{
									background-color:#ffd000;
									border-color:#333;
									width:407px;
									height:40px
							       
									}
									.select1{
									background-color:#ffd000;
									border-color:#333;
									}
									
									</style>
                                </div>
                                <div class="carimage">
									<input type="file" name="carimage" placeholder="Car Image" required>
                                </div>
								<div class="discription">
									<input type="text" name="discription" placeholder="Enter discription" required>
                                </div>
                                <div class="rentalprize">
									<input type="float" name="rentalprize" placeholder="Enter rental prize" required>
                                </div>
                               <div class="name">
									<div class="row">
										<div class="col-md-6">
											<input type="float" name="maxdistance" placeholder="Free KM" required>
										</div>
										<div class="col-md-6">
											<input type="float" name="excessprize" placeholder="Exces Prize" required>
										</div>
									</div>
                                </div><br>
                                <div class="name">
									<div class="row">
										<div class="col-md-6">
											<select class="select1" name="geartype" >
											<option selected>Gear Type</option>
                                      <option value="Manual">Manual</option>
                                      <option value="Auto">Auto</option>
                                     </select>
										</div>
										<div class="col-md-6">
											<select class="select1" name="fueltype">
											<option selected>Fuel Type</option>
                                      <option value="Disel">Disel</option>
                                      <option value="Petrol">Petrol</option>
                                     
											
											</select>
										</div>
									</div>
                                </div><br>
                                <div class="cartype">
                                <select class="select" name="seattype" >
									<option selected>Seat Type</option>
                                      <option value="4">4</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      
									</select></div>
								<div class="log-btn">
									<button type="submit"><i class="fa fa-check-square"></i> UPLOAD</button>
								</div>
								
							</form>
                		</div>
                		
                		
                		
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Footer Area Start ==-->
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>
</html>