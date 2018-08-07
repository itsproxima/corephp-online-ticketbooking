<?php
	session_start();
	 //echo $_SERVER['SERVER_NAME'];
     
?>
<!DOCTYPE html>
<html lang="en">


<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KOACON 2019 | Online Registration</title>
	    <meta name="tittle" content="43rd ANNUAL CONFERENCE OF KARNATAKA ORTHOPADIC ASSOCIATION">
	    <meta name="description" content="43rd ANNUAL CONFERENCE OF KARNATAKA ORTHOPADIC ASSOCIATION">
	    <meta name="author" content="KOACON 2019">
	    <meta name="keywords" content="43rd ANNUAL CONFERENCE OF KARNATAKA ORTHOPADIC ASSOCIATION">  
		<!-- StyleSheets -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/icomoon.css" rel="stylesheet">
		<link href="assets/css/aileron-font.css" rel="stylesheet">
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="assets/css/color.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/transition.css" rel="stylesheet">
		<!-- FontsOnline -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<!-- JavaScripts -->
		<script src="assets/scripts/modernizr.js"></script>
        <!--mycode start here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link href="css/education.css" rel="stylesheet" type="text/css" media="all" />

	    <link rel="stylesheet" href="css/font-awesome.css">
	    <link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	        rel="stylesheet">
	       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script src="js/myjs.js"></script>



       	<!-- Java Script -->
	<script src="assets/scripts/jquery.js"></script>
	<script src="assets/scripts/bootstrap.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="assets/scripts/gmap3.min.js"></script>
	<script src="assets/scripts/menu.js"></script>
	<script src="assets/scripts/contact-form.js"></script>
	<script src="assets/scripts/slick.js"></script>
	<script src="assets/scripts/countdown.js"></script>
	<script src="assets/scripts/video-popup.js"></script>
	<script src="assets/scripts/appear.js"></script>
	<script src="assets/scripts/hoverdir.js"></script>
	<script src="assets/scripts/sticky.js"></script>
	<script src="assets/scripts/prettyPhoto.js"></script>
	<script src="assets/scripts/isotope.pkgd.js"></script>
	<script src="assets/scripts/wow-min.js"></script>
	<!-- Put all Functions in functions.js -->
	<script src="assets/scripts/functions.js"></script>


	
<!-- js -->
   <script>
   
     $(document).ready(function(){
          $("#formnonres").hide();
         $("#formres").hide();
    $('input[type=radio][name=optradio]').change(function() {
        if (this.value == '1') {
             $("#formnonres").show();
         $("#formres").fadeOut();
        }
        else {
            $("#formnonres").fadeOut();
              $("#formres").show();
        }
    });
 });
  </script>	   

	    <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53736668-1', 'auto');
  ga('send', 'pageview');

 </script>

 <!---my header endhere-->
	  
	</head>
	<body>
	
	<!-- Wrapper -->
	<div class="wrapper">
		
		<!-- Header -->
		<header id="header" class="header">

			<!-- Nav Holder -->
			<div class="nav-holder style-1 after-clear">
				
				<!-- Top Bar -->
				<div class="top-bar after-clear">
					<div class="container">
						<!-- Top-left -->
						<div class="top-left">
							<ul>
									<li><i class="icon-map-marker"></i>Venue : Clark’s Exotica Convention Centre Bengaluru</li>
							</ul>
						</div>
						<!-- Top-left -->
						<div class="top-right">
							<div class="tc-social-icons style-2">
								<ul>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>															
									<li><a href="#"><i class="icon-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- Top-left -->
					</div>
				</div>
				<!-- Top Bar -->

				<!-- Logo Bar -->
				<div class="container">
					<div class="logo-bar after-clear">

						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="assets/images/koacon2019logomain.jpg" alt=""></a>							
						</div>
						<!-- Logo -->

						<!-- Button -->
						<a class="btn pull-right" href="onlineregistration.html">Register Now</a>
						<!-- Button -->

						<!-- Address List -->
						<ul class="address-list">
							<li><i class="icon-envelope-o"></i>Email: reg@koacon2019.com</li>
							<li><i class="icon-phone"></i>Call us @ +91 7337657333</li>
						</ul>
						<!-- Address List -->

					</div>
				</div>
				<!-- Logo Bar -->

				<!-- Nav & search -->
				<div class="nav-nd-search after-clear">
					<div class="container">
						<div class="p-relative after-clear">

							<!-- Nav List -->
							<nav class="dropdowns">
								<a class="toggleMenu" href="#"><i class="icon-navicon"></i></a>
								<ul class="nav-list after-clear">
									<li><a href="index.html">Home</a></li>									
									<li class="dropdown-icon">
										<a href="#">About KOACON 2019</a>
										<ul>
											<li><a href="../about.html">Welcome Message</a></li>
											<li><a href="../organisingcommittee.html">Organizing Committee</a></li>											
											<li><a href="../program-detail.html">Program Details</a></li>
											<li><a href="../venuedetails.html">Venue Details</a></li>
											<li><a href="../bangaloredetails.html">Bangalore Details</a></li>
											
										</ul>
									</li>
									<li class="dropdown-icon">
										<a href="#">Faculty</a>
										<ul>
											<li><a href="../internationalfaculty.html">International Faculty</a></li>											
										</ul>
									</li>
									<li class="dropdown-icon">
										<a href="#">Registration</a>
										<ul>
											<li><a href="../registrationdetails.html">Registration Details</a></li>
											<li><a href="../regformdownload.html">Registration Form Download</a></li>
                                            <li><a href="../offlineregistration.html">Offline Registration</a></li>
											<li><a href="onlineregistration.html">Online Registration</a></li>
										</ul>
									</li>									
									<li class="dropdown-icon">
										<a href="#">Paper Presentation</a>
										<ul>
											<li><a href="../ppguidelines.html">Paper Presentation Guidlines</a></li>											
										</ul>
									</li>									
									<li class="dropdown-icon">
										<a href="#">Scientific Program</a>
										<ul>
											<li><a href="../workshop.html">Workshop Details</a></li>											
										</ul>
									</li>
									<li><a href="../downloads.html">Downloads</a></li>
									<li><a href="../contact-1.html">Contact</a></li>
								</ul>
							</nav>
							
						</div>
					</div>
				</div>	
				<!-- Nav & search -->

			</div>
			<!-- Nav Holder -->

			<!-- Banner -->
			<div class="inner-banner tc-padding" style="background: url(assets/images/inner-banner.jpg) no-repeat;">
				<div class="page-heading">
					<h1>Online Registration</h1>
					<div class="tc-breadcrumb">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Registration</a></li>
							
							<li>Online Registration</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Banner -->

		</header>
		<!-- Header -->

		<!-- Mian Content -->
		<main id="main-content" class="main-coontent">

			<!-- Blog Detail -->
			<div class="blog-detail tc-padding">
				<div class="container">
					<div class="row">
					
						<!-- Content -->
						<div class="col-lg-9 col-md-9 col-sm-8">

							<!-- Detail -->
							<div class="post-detail">
							<h3 style="color: #bf1e2e">Online Registration</h3>
								
																	
								<!--mycode body-->
								    <!-- main -->

								    	<div class="" align="center" id="thankyou">

			   <?php  echo $_GET['msg'];?>
			<br><br>
			<button onclick="location.href="koacon2019.com" >Back to Home</button>

		</div>

  <!-- //main -->
  

								<!--end-->
								<aside class="col-lg-12 col-md-12 col-sm-6">
						
						
								
							</div>
							<!-- Detail -->

							<!-- Form -->
						

							<!-- Form -->

						</div>
						<!-- Content -->

						<!-- Aside -->
						<aside class="col-lg-3 col-md-3 col-sm-4">
							
							<!-- Search Widget -->
							
							<!-- Search Widget -->

							<!-- Text Widget -->
							<!-- <div class="aside-widget">
								<h3>Text Widget</h3>
								<p>Phasellus eleifend iaculis venenat nunc at nulla rhoncus, ultrices nunc eget, condimentum tortor. Fusce cursus porttitor magna, vel rhoncus leo finibus vitae. Vestibulum tincidunt, mauris volutpat vulputate tristique.</p>
							</div> -->
							<!-- Text Widget -->

							<!-- Recent Post -->
							<!-- <div class="aside-widget">
								<h3>Recent Post</h3>
								<div class="recent-post-widget">
									
									<!-- Post -->
									<!-- <div class="news-post left">
										<figure>
											<img src="assets/images/recent-post/img-1-1.jpg" alt="">
										</figure>
										<div class="detail">
											<h5><a href="#">Getting Started with WordPress Plugins Installation</a></h5>
											<div class="meta-post">
												<ul>
													<li>Adam John</li>
													<li>Jan 1, 2017</li>
												</ul>
											</div>
										</div>
									</div> --> 
									<!-- Post -->

									<!-- Post -->
									<!-- <div class="news-post left">
										<figure>
											<img src="assets/images/recent-post/img-1-2.jpg" alt="">
										</figure>
										<div class="detail">
											<h5><a href="#">Getting Started with WordPress Plugins Installation</a></h5>
											<div class="meta-post">
												<ul>
													<li>Adam John</li>
													<li>Jan 1, 2017</li>
												</ul>
											</div>
										</div>
									</div> -->
									<!-- Post 

								</div>
							</div> -->
							<!-- Recent Post -->

							<!-- Categories -->
							<div class="aside-widget">
								<h3>Quick Links</h3>
								<div class="categories-list">
									<ul>
										<li><a href="about.html">About KOACON</a></li>
										<li><a href="onlineregistration.html">Online Registration</a></li>
										<li><a href="registrationdetails.html">Registration Details</a></li>
										<li><a href="workshop.html">Workshop</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<!-- Categories -->

							<!-- Recent Events Gallery -->
							
							<!-- Recent Events Gallery -->

						</aside>
						<!-- Aside -->

					</div>
				</div>
			</div>
			<!-- Blog Detail -->

		</main>
		<!-- Mian Content -->

		<!-- Footer -->
		<footer id="footer" class="footer">

			<!-- NewsLatter -->
			
			<!-- Footer Inner -->
			<div class="tc-padding-top">
				<div class="container">

					<!-- Instagram -->
					
					<!-- Instagram -->

					<!-- Footer Logo -->
					<div class="footer-logo">
						<a href="#"><img src="assets/images/koacon2019logo.jpg" alt=""></a>						
					</div>
					<!-- Footer Logo -->

					<!-- Seprater -->
					<div class="seprater-line"></div>
					<!-- Seprater -->

					<!-- Nav Link -->
					<div class="footer-link">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="program-detail.html">Program</a></li>
							<li><a href="downloads.html">Downloads</a></li>
							<li><a href="internationalfaculty.html">Speakers</a></li>
							<li><a href="contact-1.html">Contact</a></li>
						</ul>
					</div>
					<!-- Nav Link -->

					<!-- Sub Footer -->
					<div class="sub-footer">
						<div class="tc-social-icons">
						<span>Copyrights</span> © 2018, KOACON 2019. All Rights Reserved.
							
						</div>
						<p>Conceptualized By <a href="http://srushtigroups.com">Srushti.</a> Designed &amp; Developed By: <a href="http://sntac.com">S N Technologies & Consulting</a></p>
					</div>
					<!-- Sub Footer -->

				</div>
			</div>
			<!-- Footer Inner -->

		</footer>
		<!-- Footer -->

	</div>
	<!-- Wrapper -->

	<!-- Login Modal -->
	<div class="modal fade" id="login" role="dialog">
  		<div class="login-form position-center-center overlay-dark">
  			<a href="#"><img src="assets/images/logo-5.png" alt=""></a>
  			<form>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Your Name">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Username">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="password" placeholder="Password">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="password" placeholder="Confirm Password">
  				</div>
  				<button class="btn full-width mb-30">Login Account</button>
  			</form>
  			<a class="border-bottom" href="#">Forgot Password?</a>
  			<div class="tc-social-icons style-2">
				<ul>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="facebook" href="#"><i class="icon-facebook2"></i></a></li>
					<li><a class="google-plus" href="#"><i class="icon-google-plus2"></i></a></li>
					<li><a class="globe" href="#"><i class="icon-globe"></i></a></li>
				</ul>
			</div>
			<span class="close" data-dismiss="modal" aria-label="Close"><i class="icon-times"></i></span>
  		</div>
	</div>
	<!-- Login Modal -->

	<!-- Signup Modal -->
	<div class="modal fade" id="signup" role="dialog">
  		<div class="login-form position-center-center overlay-dark">
  			<a href="#"><img src="assets/images/logo-5.png" alt=""></a>
  			<form>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Your Name">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Email">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Username">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Password">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Confirm Password">
  				</div>
  				<button class="btn full-width mb-30">Login Account</button>
  			</form>
			<span class="close" data-dismiss="modal" aria-label="Close"><i class="icon-times"></i></span>
  		</div>
	</div>
	<!-- Signup Modal -->

  
  <script>


</script>



	<!--myscript end-->
	</body>
</html>
