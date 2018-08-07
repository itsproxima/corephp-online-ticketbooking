<?php
session_start();

      //  echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
       include("../connectdb.php");
       $query="SELECT * FROM `tickets_tbl`";

             // echo "error shows"; 
              $result = $conn->query($query);
             // print_r($result);
              
          if ($result->num_rows > 0) {
                  // output data of each row
                  
                  while($row = $result->fetch_assoc()) 
                  {
                       $ticketId=$row["ticket_id"];
                       $AcPerPrice=$row["price"] ;
                       $Aname=$row["acompany_per_name"] ;  
                       $relationship=$row["relationship"] ;  
                       $Aemail=$row["acompany_per_email"] ;  
                       $Aphone=$row["acompany_per_phone"] ;  
                       $name=$row["name"] ;  
                       $surname=$row["surname"] ;  
                       $email=$row["email"] ;  
                       $phonenumber=$row["phonenumber"] ;  
                       $office=$row["office"] ;  
                       $kmcR_no=$row["kmcR_no"] ;
                       $koaMembership_no=$row["koaMembership_no"] ;
                       $date=$row["date"] ;
                       $address=$row["address"] ;
                       $city=$row["city"] ;
                       $zip=$row["zip_code"] ;
                       $state=$row["state"] ;
                       $country=$row["country"] ;
                       

                      
                       
                      
                  } 
                   $fullname="$name.$surname";
                   $_SESSION["customer_name"]=$fullname;
                   $_SESSION["customer_email"]=$email;
                   $_SESSION["customer_phone"]=$phonenumber;
                    
                  
           }

          else {
                echo  $query . "<br>" . $conn->error;
              }
              
       
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
		<link href="http://koacon2019.com/onlineregistration/assets/css/bootstrap.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/icomoon.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/aileron-font.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/animate.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/style.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/main.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/color.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/responsive.css" rel="stylesheet">
		<link href="http://koacon2019.com/onlineregistration/assets/css/transition.css" rel="stylesheet">
		<!-- FontsOnline -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<!-- JavaScripts -->
		<script src="http://koacon2019.com/onlineregistration/assets/scripts/modernizr.js"></script>
        <!--mycode start here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	    <link rel="stylesheet" href="http://koacon2019.com/onlineregistration/css/bootstrap.min.css">
	    <link href="http://koacon2019.com/onlineregistration/css/education.css" rel="stylesheet" type="text/css" media="all" />

	    <link rel="stylesheet" href="http://koacon2019.com/onlineregistration/css/font-awesome.css">
	    <link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	        rel="stylesheet">
	       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script src="http://koacon2019.com/onlineregistration/js/myjs.js"></script>



       	<!-- Java Script -->
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/jquery.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/bootstrap.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/gmap3.min.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/menu.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/contact-form.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/slick.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/countdown.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/video-popup.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/appear.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/hoverdir.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/sticky.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/prettyPhoto.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/isotope.pkgd.js"></script>
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/wow-min.js"></script>
	<!-- Put all Functions in functions.js -->
	<script src="http://koacon2019.com/onlineregistration/assets/scripts/functions.js"></script>

<style>
    INPUT[type="hidden"] {  
  margin-bottom: 0 !important;  
} 
</style>
	
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
 <script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
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
							<a href="index.html"><img src="http://koacon2019.com/onlineregistration/assets/images/koacon2019logomain.jpg" alt=""></a>							
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
			<div class="inner-banner tc-padding" style="background: url(http://koacon2019.com/onlineregistration/assets/images/inner-banner.jpg) no-repeat;">
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


<div class="register-form">
<form method="POST" name="customerData" action="ccavRequestHandler.php">
		<table width="40%" height="100"align="center " style="    margin-top: -237px;" ></table>
			<table width="50%" height="100" align="center" >
				
				<tr>
					<td></td><td><input type="hidden" name="tid" id="tid" readonly /></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden"  name="merchant_id" value="171728"/></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden" name="order_id" value="<?php echo $ticketId;?>"/></td>
				</tr>
				
				<tr>
					<td></td><td><input type="hidden" name="currency" value="INR"/></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden" name="redirect_url" value="http://koacon2019.com/onlineregistration/ccavenue/ccavResponseHandler.php"/></td>
				</tr>
			 	<tr>
			 		<td></td><td><input type="hidden" name="cancel_url" value="http://koacon2019.com/onlineregistration/ccavenue/ccavResponseHandler.php"/></td>
			 	</tr>
			 	<tr>
					<td></td><td><input type="hidden" name="language" value="EN"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2"><h3>Review Booking : </h3></td></br>
		     	</tr>
		        
		        <tr>
		            
	<!--	            Array
(
    [ticket_price] => 6100
    [date] => 1st-duration
    [package] => (nonresidential)Delegate koamember
    [ticket_id] => KOA5b3e5bf41f068
    
    if(isset($_SESSION["firstAcPerson"])or isset($_SESSION["secondAcPerson"];"])){ echo $_SESSION["firstAcPerson"].$_SESSION["secondAcPerson"];;}else{echo "you have not selected any accompanying person";}-->

		        </br>	<td width="100%">Your selected Package	:</td><td><input   value="<?php echo $_SESSION["package"] ?>"/></td>
		        </tr>
		        <tr>
		        </br>	<td >workshop	:</td><td><input   value="<?php if(isset($_SESSION["workshopName"])){ echo $_SESSION["workshopName"];}else{echo "you have not selected any workshop";} ?>"/></td>
		        </tr>
		        <tr>
		        </br>	<td >Accompanying Person:</td><td><input   value="<?php if(isset($_SESSION["firstAcPerson"])or isset($_SESSION["secondAcPerson"])){ echo $_SESSION["firstAcPerson"].$_SESSION["secondAcPerson"];;}else{echo "you have not selected any accompanying person";} ?>"/></td>
		        </tr>
		        <tr>
		        </br>	<td >Billing Name	:</td><td><input  name="billing_name" value="<?php echo $name;?>"/></td>
		        </tr>
		        <tr>
		        	<td >Billing Address	:</td> <td> <input name="billing_address" value="<?php echo $address;?>"/></td>
		        </tr>
		        <tr>
		        	<td  >Billing City	:</td><td><input  name="billing_city" value="<?php echo $city;?>"/></td>
		        </tr>
		        <tr>
		        	<td >Billing State	:</td><td><input  name="billing_state" value="<?php echo $state;?>"/></td>
		        </tr>
		        <tr>
		        	<td  >Billing Zip	:</td><td><input  name="billing_zip" value="<?php echo $zip;?>"/></td>
		        </tr>
		        <tr>
		        	<td >Billing Country	:</td><td><input  name="billing_country" value="<?php echo $country;?>"/></td>
		        </tr>
		        <tr>
		        	<td  >Billing Tel	:</td><td><input name="billing_tel" value="<?php echo $phonenumber;?>"/></td>
		        </tr>
		        <tr>
		        	<td  >Billing Email	:</td><td><input type="text" name="billing_email" value="<?php echo $email;?>"/></td>
		        </tr>
		        <tr>
					<td><h3>Your Total Price :</h3></td><td><h4><input  name="amount" value="<?php echo $_SESSION["ticket_price"] ?>" readonly/></h4></td>
				</tr>
		        <!--
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="hidden" name="delivery_name" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="hidden" name="delivery_address" value=""/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="hidden" name="delivery_city" value=""/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="hidden" name="delivery_state" value=""/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="hidden" name="delivery_zip" value=""/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="hidden" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="hidden" name="delivery_tel" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="hidden" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="hidden" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input  type="hidden" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="hidden" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="hidden" name="merchant_param5" value="additional Info."/></td>
				</tr>
				 
				 <tr>
		     		<td colspan="2">Payment information:</td>
		     	</tr>
				 <!--<tr> <td> Payment Option: </td> 
		         	  <td> 
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTCRDC">Credit Card
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTDBCRD">Debit Card  <br/>
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTNBK">Net Banking 
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTCASHC">Cash Card <br/>
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTMOBP">Mobile Payments
		         	  		<input class="payOption" type="radio" name="payment_option" value="OPTEMI">EMI
						<input class="payOption" type="radio" name="payment_option" value="OPTWLT">Wallet
		         	   </td>
		         </tr>->
		      

		         
		         <!-- EMI section start -->
		         
		         <!--<tr >
		         <td  colspan="2">
		          <div id="emi_div" style="display: none">
			         <table border="1" width="100%">
			         <tr> <td colspan="2">EMI Section </td></tr>
			         <tr> <td> Emi plan id: </td>
			            <td><input readonly="readonly" type="text" id="emi_plan_id"  name="emi_plan_id" value=""/> </td>
			         </tr>
			         <tr> <td> Emi tenure id: </td>
			            <td><input readonly="readonly" type="text" id="emi_tenure_id" name="emi_tenure_id" value=""/>  </td>
			         </tr>
			         <tr><td>Pay Through</td>
				         <td>
					         <select name="emi_banks"  id="emi_banks">
					         </select>
				         </td>
			        </tr>
			        <tr><td colspan="2">
				         <div id="emi_duration" class="span12">
		                	<span class="span12 content-text emiDetails">EMI Duration</span>
		                    <table id="emi_tbl" cellpadding="0" cellspacing="0" border="1" >
							</table> 
		                </div>
				        </td>
			        </tr>
			        <tr>
			        	 <td id="processing_fee" colspan="2">
			        	</td>
			        </tr>
			        </table>
		        </div>
		        </td>
		        </tr>-->
		        <!-- EMI section end -->
		         
		         
		        <!-- <tr> <td> Card Type: </td>
		             <td><input type="text" id="card_type" name="card_type" value="" readonly="readonly"/></td>
		         </tr>
		        
		        <tr> <td> Card Name: </td>
		             <td> <select name="card_name" id="card_name"> <option value="">Select Card Name</option> </select> </td>
		        </tr>
		        
		        <tr> <td> Data Accepted At </td>
		             <td><input type="text" id="data_accept" name="data_accept" readonly="readonly"/></td>
		        </tr>
		         
		         <tr> <td> Card Number: </td>
		            <td> <input type="text" id="card_number" name="card_number" value=""/>e.g. 4111111111111111 </td>
		         </tr>
		          <tr> <td> Expiry Month: </td>
		               <td> <input type="text" name="expiry_month" value=""/>e.g. 07 </td>
		         </tr>
		          <tr> <td> Expiry Year: </td>
		          	   <td> <input type="text" name="expiry_year" value=""/>e.g. 2027</td>
		         </tr>
		          <tr> <td> CVV Number:</td>
		               <td> <input type="text" name="cvv_number" value=""/>e.g. 328</td>
		         </tr>
		         <tr> <td> Issuing Bank:</td>
		            <td><input type="text" name="issuing_bank" value=""/>e.g. State Bank Of India</td>
		         </tr>
			 <tr> 
				<td> Mobile Number:</td>
		            	<td><input type="text" name="mobile_number" value=""/>e.g. 9770707070</td>
		         </tr>
			<tr> 
				<td> MMID:</td>
		            	<td><input type="text" name="mm_id" value=""/>e.g. 1234567</td>
		         </tr>
			<tr> 
				<td> OTP:</td>
		            	<td><input type="text" name="otp" value=""/>e.g. 123456</td>
		         </tr>
			 <tr> 
				<td> Promotions:</td>
		            	<td> <select name="promo_code" id="promo_code"> <option value="">All Promotions &amp; Offers</option> </select> </td>
		         </tr>
				 -->
		        <tr>
		        	<td></td><td><br><INPUT TYPE="submit" value="CheckOut"></td>
		        </tr>
	      	</table>
	      </form>
	      
	      </div>


















































 <!-- //main -->
  

<!--mycode-end-->
								<aside class="col-lg-12 col-md-12 col-sm-6">
						
						
								
							</div>
							<!-- Detail -->

							<!-- Form -->
						

							<!-- Form -->

						</div>
						<!-- Content -->

						<!-- Aside -->
						<aside class="col-lg-3 col-md-3 col-sm-4">
						
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
						<a href="#"><img src="http://koacon2019.com/onlineregistration/assets/images/koacon2019logo.jpg" alt=""></a>						
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
  			<a href="#"><img src="http://koacon2019.com/onlineregistration/assets/images/logo-5.png" alt=""></a>
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
  			<a href="#"><img src="http://koacon2019.com/onlineregistration/assets/images/logo-5.png" alt=""></a>
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

  
 <!--ccavenue script-->
<script language="javascript" type="text/javascript" src="json.js"></script>
<script src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">
  $(function(){
  
	 /* json object contains
	 	1) payOptType - Will contain payment options allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	2) cardType - Will contain card type allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	3) cardName - Will contain name of card. E.g. Visa, MasterCard, American Express or and bank name in case of Net banking. 
	 	4) status - Will help in identifying the status of the payment mode. Options may include Active or Down.
	 	5) dataAcceptedAt - It tell data accept at CCAvenue or Service provider
	 	6)error -  This parameter will enable you to troubleshoot any configuration related issues. It will provide error description.
	 */	  
  	  var jsonData;
  	  var access_code="" // shared by CCAVENUE 
	  var amount="";
  	  var currency="INR";
  	  
      $.ajax({
           url:'https://secure.ccavenue.com/transaction/transaction.do?command=getJsonData&access_code='+access_code+'&currency='+currency+'&amount='+amount,
           dataType: 'jsonp',
           jsonp: false,
           jsonpCallback: 'processData',
           success: function (data) { 
                 jsonData = data;
                 // processData method for reference
                 processData(data); 
		 // get Promotion details
                 $.each(jsonData, function(index,value) {
			if(value.Promotions != undefined  && value.Promotions !=null){  
				var promotionsArray = $.parseJSON(value.Promotions);
		               	$.each(promotionsArray, function() {
					console.log(this['promoId'] +" "+this['promoCardName']);	
					var	promotions=	"<option value="+this['promoId']+">"
					+this['promoName']+" - "+this['promoPayOptTypeDesc']+"-"+this['promoCardName']+" - "+currency+" "+this['discountValue']+"  "+this['promoType']+"</option>";
					$("#promo_code").find("option:last").after(promotions);
				});
			}
		});
           },
           error: function(xhr, textStatus, errorThrown) {
               alert('An error occurred! ' + ( errorThrown ? errorThrown :xhr.status ));
               //console.log("Error occured");
           }
   		});
   		
   		$(".payOption").click(function(){
   			var paymentOption="";
   			var cardArray="";
   			var payThrough,emiPlanTr;
		    var emiBanksArray,emiPlansArray;
   			
           	paymentOption = $(this).val();
           	$("#card_type").val(paymentOption.replace("OPT",""));
           	$("#card_name").children().remove(); // remove old card names from old one
            $("#card_name").append("<option value=''>Select</option>");
           	$("#emi_div").hide();
           	
           	//console.log(jsonData);
           	$.each(jsonData, function(index,value) {
           		//console.log(value);
            	  if(paymentOption !="OPTEMI"){
	            	 if(value.payOpt==paymentOption){
	            		cardArray = $.parseJSON(value[paymentOption]);
	                	$.each(cardArray, function() {
	    	            	$("#card_name").find("option:last").after("<option class='"+this['dataAcceptedAt']+" "+this['status']+"'  value='"+this['cardName']+"'>"+this['cardName']+"</option>");
	                	});
	                 }
	              }
	              
	              if(paymentOption =="OPTEMI"){
		              if(value.payOpt=="OPTEMI"){
		              	$("#emi_div").show();
		              	$("#card_type").val("CRDC");
		              	$("#data_accept").val("Y");
		              	$("#emi_plan_id").val("");
						$("#emi_tenure_id").val("");
						$("span.emi_fees").hide();
		              	$("#emi_banks").children().remove();
		              	$("#emi_banks").append("<option value=''>Select your Bank</option>");
		              	$("#emi_tbl").children().remove();
		              	
	                    emiBanksArray = $.parseJSON(value.EmiBanks);
	                    emiPlansArray = $.parseJSON(value.EmiPlans);
	                	$.each(emiBanksArray, function() {
	    	            	payThrough = "<option value='"+this['planId']+"' class='"+this['BINs']+"' id='"+this['subventionPaidBy']+"' label='"+this['midProcesses']+"'>"+this['gtwName']+"</option>";
	    	            	$("#emi_banks").append(payThrough);
	                	});
	                	
	                	emiPlanTr="<tr><td>&nbsp;</td><td>EMI Plan</td><td>Monthly Installments</td><td>Total Cost</td></tr>";
							
	                	$.each(emiPlansArray, function() {
		                	emiPlanTr=emiPlanTr+
							"<tr class='tenuremonth "+this['planId']+"' id='"+this['tenureId']+"' style='display: none'>"+
								"<td> <input type='radio' name='emi_plan_radio' id='"+this['tenureMonths']+"' value='"+this['tenureId']+"' class='emi_plan_radio' > </td>"+
								"<td>"+this['tenureMonths']+ "EMIs. <label class='merchant_subvention'>@ <label class='emi_processing_fee_percent'>"+this['processingFeePercent']+"</label>&nbsp;%p.a</label>"+
								"</td>"+
								"<td>"+this['currency']+"&nbsp;"+this['emiAmount'].toFixed(2)+
								"</td>"+
								"<td><label class='currency'>"+this['currency']+"</label>&nbsp;"+ 
									"<label class='emiTotal'>"+this['total'].toFixed(2)+"</label>"+
									"<label class='emi_processing_fee_plan' style='display: none;'>"+this['emiProcessingFee'].toFixed(2)+"</label>"+
									"<label class='planId' style='display: none;'>"+this['planId']+"</label>"+
								"</td>"+
							"</tr>";
						});
						$("#emi_tbl").append(emiPlanTr);
	                 } 
                  }
           	});
           	
         });
   
	  
      $("#card_name").click(function(){
      	if($(this).find(":selected").hasClass("DOWN")){
      		alert("Selected option is currently unavailable. Select another payment option or try again later.");
      	}
      	if($(this).find(":selected").hasClass("CCAvenue")){
      		$("#data_accept").val("Y");
      	}else{
      		$("#data_accept").val("N");
      	}
      });
          
     // Emi section start      
          $("#emi_banks").live("change",function(){
	           if($(this).val() != ""){
	           		var cardsProcess="";
	           		$("#emi_tbl").show();
	           		cardsProcess=$("#emi_banks option:selected").attr("label").split("|");
					$("#card_name").children().remove();
					$("#card_name").append("<option value=''>Select</option>");
				    $.each(cardsProcess,function(index,card){
				        $("#card_name").find("option:last").after("<option class=CCAvenue value='"+card+"' >"+card+"</option>");
				    });
					$("#emi_plan_id").val($(this).val());
					$(".tenuremonth").hide();
					$("."+$(this).val()+"").show();
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().attr("checked",true);
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().trigger("click");
					 
					 if($("#emi_banks option:selected").attr("id")=="Customer"){
						$("#processing_fee").show();
					 }else{
						$("#processing_fee").hide();
					 }
					 
				}else{
					$("#emi_plan_id").val("");
					$("#emi_tenure_id").val("");
					$("#emi_tbl").hide();
				}
				
				
				
				$("label.emi_processing_fee_percent").each(function(){
					if($(this).text()==0){
						$(this).closest("tr").find("label.merchant_subvention").hide();
					}
				});
				
		 });
		 
		 $(".emi_plan_radio").live("click",function(){
			var processingFee="";
			$("#emi_tenure_id").val($(this).val());
			processingFee=
					"<span class='emi_fees' >"+
			 			"Processing Fee:"+$(this).closest('tr').find('label.currency').text()+"&nbsp;"+
			 			"<label id='processingFee'>"+$(this).closest('tr').find('label.emi_processing_fee_plan').text()+
			 			"</label><br/>"+
                			"Processing fee will be charged only on the first EMI."+
                	"</span>";
             $("#processing_fee").children().remove();
             $("#processing_fee").append(processingFee);
             
             // If processing fee is 0 then hiding emi_fee span
             if($("#processingFee").text()==0){
             	$(".emi_fees").hide();
             }
			  
		});
		
		
		$("#card_number").focusout(function(){
			/*
			 emi_banks(select box) option class attribute contains two fields either allcards or bin no supported by that emi 
			*/ 
			if($('input[name="payment_option"]:checked').val() == "OPTEMI"){
				if(!($("#emi_banks option:selected").hasClass("allcards"))){
				  if(!$('#emi_banks option:selected').hasClass($(this).val().substring(0,6))){
					  alert("Selected EMI is not available for entered credit card.");
				  }
			   }
		   }
		  
		});
			
			
	// Emi section end 		
   
   
   // below code for reference 
 
   function processData(data){
         var paymentOptions = [];
         var creditCards = [];
         var debitCards = [];
         var netBanks = [];
         var cashCards = [];
         var mobilePayments=[];
         $.each(data, function() {
         	 // this.error shows if any error   	
             console.log(this.error);
              paymentOptions.push(this.payOpt);
              switch(this.payOpt){
                case 'OPTCRDC':
                	var jsonData = this.OPTCRDC;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		creditCards.push(this['cardName']);
                	});
                break;
                case 'OPTDBCRD':
                	var jsonData = this.OPTDBCRD;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		debitCards.push(this['cardName']);
                	});
                break;
              	case 'OPTNBK':
	              	var jsonData = this.OPTNBK;
	                var obj = $.parseJSON(jsonData);
	                $.each(obj, function() {
	                 	netBanks.push(this['cardName']);
	                });
                break;
                
                case 'OPTCASHC':
                  var jsonData = this.OPTCASHC;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	cashCards.push(this['cardName']);
                  });
                 break;
                   
                  case 'OPTMOBP':
                  var jsonData = this.OPTMOBP;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	mobilePayments.push(this['cardName']);
                  });
              }
              
            });
           
           //console.log(creditCards);
          // console.log(debitCards);
          // console.log(netBanks);
          // console.log(cashCards);
         //  console.log(mobilePayments);
            
      }
  });
</script>

</script>



	<!--myscript end-->
	</body>
</html>
