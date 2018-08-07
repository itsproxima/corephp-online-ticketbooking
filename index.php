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

    <div class="col-sm-12">

         

</div>  
<div class="register-form">
	   
            <div class="row">
                <div class="col-md-12" >
                    	<h1>Choose Any One of the Package :</h1>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <label class="radio-inline"><input type="radio" name="optradio" value="1">Non Residential Package</label>
<label class="radio-inline"><input type="radio" name="optradio" value="2">Residential Package</label>
                   
                </div>
                
            </div>	
      	
      		
           <div class="fields-grid">
           	<form action="nonresidentialback.php" method="post" id="formnonres" >
        
    
          
                <h1>Non Residential Package</h1>
               <!-- <label  style="text-align: center;" >Non Residential Package</label>-->
                   <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                      <div class="panel-default">
                          <div id="headingOne" role="tab" class="panel-heading">
                                <div class="w3-agile1">
                                    

                                    
                                        <p>Please select your preferred package:</p>
                                        <div>
                                          <input type="radio" id="contactChoice1"
                                           name="package" value="K01" required="">
                                          <label for="category1">Delegate KOA Member </label><br>

                                          <input type="radio" id="contactChoice2"
                                           name="package" value="K02">
                                          <label for="category2">Delegate Non KOA member</label><br>

                                          <input type="radio" id="contactChoice3"
                                           name="package" value="K03">
                                          <label for="category3">PG Student</label>
                                        </div>
                              
                                 </div>
                              </div>
                        </div>
                    </div>


                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                      <div class="panel-default">
                          <div id="headingOne" role="tab" class="panel-heading">
                                <div class="w3-agile1">
                                    


                                          DO you want to attend workshop ?: <input type="checkbox" name="checkWorkshop" id="myCheck" value="1" onclick="myFunction()">

                                         
                                          <div  id="text" style="display:none">
                                          <input type="radio" id="workshop1"
                                           name="workshop" value="Hip & Knee Robotic Replacement Surgery" >
                                          <label for="workshop1"></label>Hip & Knee Robotic Replacement Surgery<br>

                                          <input type="radio" id="workshop2"
                                           name="workshop" value="Hip - Arthroscopy">
                                          <label for="workshop2">Hip - Arthroscopy</label><br>

                                          <input type="radio" id="workshop3"
                                           name="workshop" value="Reverse Shoulder Arthroplasty">
                                          <label for="workshop3">Reverse Shoulder Arthroplasty</label><br>

                                          <input type="radio" id="workshop4"
                                           name="workshop" value="Limb Deformity Correction">
                                          <label for="workshop4">Limb Deformity Correction</label><br>

                                          <input type="radio" id="workshop5"
                                           name="workshop" value="Wrist & hand">
                                          <label for="workshop5">Wrist & hand</label>

                                          <input type="radio" id="workshop6"
                                           name="workshop" value="Foot & Ankle">
                                          <label for="workshop6">Foot & Ankle</label>

                                          
                                          </div>

                              
                                 </div>
                              </div>
                        </div>
                </div>



                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                      <div class="panel-default">
                          <div id="headingOne" role="tab" class="panel-heading">
                                <div class="w3-agile1">
                                    


                                          DO you have any accompanying Person ?: <input type="checkbox" name="checkAccompany" id="checkAccompany" value="1"  onclick="Apersonnumber()">

                                        <div  id="text2" style="display:none">
                                             <input type="radio" name="noOfperson" id="oneperson" value="1" onclick="oneperdata()" >
                                             <label for="oneperson">one person</label>
                                             <input type="radio" name="noOfperson" id="twoperson" value="2" onclick="twopersondata()" >
                                             <label for="twoperson">two person</label>
                                          
                                          
                                        </div>

                                         <div  id="data1" style="display:none">

                                          <input type="text" id="one" style="display: none" name="firstApersonname" placeholder="enter the accompanying person name">
                                          <input type="text" id="two" style="display: none" name="secondApersonname" placeholder="enter the accompanying person name">
                                         </div>
                                         
                                           



                                      

                              
                                 </div>
                              </div>
                        </div>
                </div>
               
       
            <div class="clear"> </div>
          <input name="submit" type="submit" value="Submit">
        </div>
        
      </form>


        
           <div class="fields-grid" id="formres"  >
        	 <form action="resback.php" method="post">
    
          
                <h1>Residential Package</h1>
               <!-- <label  style="text-align: center;" >Non Residential Package</label>-->
                   <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                      <div class="panel-default">
                          <div id="headingOne" role="tab" class="panel-heading">
                                <div class="w3-agile1">
                                    


                                        <p>Please select your preferred Package:</p>
                                        <div>
                                          <input type="radio" id="singleoccupancy"
                                           name="package" value="K05" onclick="myFunctionRes()">
                                          <label for="category1">Delegate On Single Occupancy </label><br>
                                          		 
                                          	
                      							<div class="panel-default">
                         						 <div id="headingOne" role="tab" class="panel-heading">
                               					 		

                                          				<div style="display: none;" id="showoption" >
                                          				 DO U have any accompanying Person ?:

                                          				  <input type="checkbox" name="checkAccompanyRes" id="checkAccompanyRes" value="1"  onclick="ApersonnumberRes()">
                                          				</div>

                                          				
		                                                  <div  id="viewoption" style="display:none">
		                                                     <input type="radio" name="noOfperson" id="oneperson_res" value="1" onclick="oneperdata_res()" >
		                                                     <label for="oneperson">one person</label>
		                                                     <input type="radio" name="noOfperson" id="twoperson_res" value="2" onclick="twopersondata_res()" >
		                                                     <label for="twoperson">two person</label>
		                                                  
		                                                  
		                                                  </div>


                                                               <div  id="data1_res" style="display:none">

                                                            
                                                              <input type="text" id="1st" style="display: none" class="onlineforminput"  name="1stApersonname" placeholder="enter the accompanying person name">
                                                              <input type="text" id=2nd style="display: none" class="onlineforminput"  name="2ndApersonname" placeholder="enter the accompanying person name">
                                                             </div>
                                                      
                                                    </div>
                                                </div>
                                           
                                                          
                                          <input type="radio" id="doubleoccupancy"
                                           name="package" value="K06" onclick="ApersonnumberRes(),getactwin()">
                                          <label for="category2">Delegate On TWin Sharing </label><br>
                                          					
                                          						<div class="panel-default" style="">
                         						                 <div id="headingOne" role="tab" class="panel-heading" style="background-color:#fff;">
                                          					
                                          					<div  id="twin_ac" style="display:none">
                                          		 			 person you are sharing the room with?
                                                              <input type="text"  name="twinApersonname" placeholder="enter the accompanying person name">
                                                             </div>
                                                             
                                                             </div>
                                                             </div>
                                          			 		

                                          <input type="radio" id="trippleoccupancy"
                                           name="package" value="K07" onclick="ApersonnumberRes(),getactripple()">
                                          <label for="category3">Delegate On Triple Sharing </label>
                                          		 			
                                          		 		<div class="panel-default">
                         						         <div id="headingOne" role="tab" class="panel-heading">
                                                             <div  id="tripple_ac" style="display:none"> person you are sharing the room with?
                                                              <input type="text"  name="tripple_1stApersonname" placeholder="enter the accompanying person name">
                                                              <input type="text" name="tripple_2ndApersonname" placeholder="enter the accompanying person name">
                                                             </div>
                                                         </div>
                                                         </div>
                                        </div>
                              
                                 </div>
                              </div>
                        </div>
                    </div>

                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                      <div class="panel-default">
                          <div id="headingOne" role="tab" class="panel-heading">
                                <div class="w3-agile1">
                                    


                                          DO you want to attend workshop ?: <input type="checkbox" name="checkWorkshop" id="myCheck_res" value="1" onclick="myFunction_res()">

                                         
                                          <div  id="text_res" style="display:none">
                                          <input type="radio" id="workshop1_res"
                                           name="workshop" value="Hip & Knee Robotic Replacement Surgery" >
                                          <label for="workshop1"></label>Hip & Knee Robotic Replacement Surgery<br>

                                          <input type="radio" id="workshop2_res"
                                           name="workshop" value="Hip - Arthroscopy">
                                          <label for="workshop2">Hip - Arthroscopy</label><br>

                                          <input type="radio" id="workshop3_res"
                                           name="workshop" value="Reverse Shoulder Arthroplasty">
                                          <label for="workshop3">Reverse Shoulder Arthroplasty</label><br>

                                          <input type="radio" id="workshop4_res"
                                           name="workshop" value="Limb Deformity Correction">
                                          <label for="workshop4">Limb Deformity Correction</label><br>

                                          <input type="radio" id="workshop5_res"
                                           name="workshop" value="Wrist & hand">
                                          <label for="workshop5">Wrist & hand</label>

                                          <input type="radio" id="workshop6_res"
                                           name="workshop" value="Foot & Ankle">
                                          <label for="workshop6">Foot & Ankle</label>

                                          
                                          </div>

                              
                                 </div>
                              </div>
                        </div>
                </div>



               

            <div class="clear"> </div>
          <input name="submit" type="submit" value="Submit">
        </div>
        
      </form>

      <div class="clear-both"></div>
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


<!--myscript-->
 <!-- <script src="js/jquery-2.1.4.min.js"></script>-->

  <!-- Calendar -->
  <!--<link rel="stylesheet" href="css/jquery-ui.css" />
  <script src="js/jquery-ui.js"></script>-->

 
  <!-- //Calendar -->
  
  <script>


</script>



	<!--myscript end-->
	</body>
</html>

