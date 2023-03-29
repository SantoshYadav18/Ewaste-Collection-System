<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>

	<!-- ---------------------------     Top NavBar     -------------------------------- -->
	<div class="topnav">
		<div class="lefttopnav">
			<p>Have any question?</p>
			<i class="fas fa-envelope"></i>
			<p>info@gogreen.in</p>
			<i class="fas fa-phone-alt"></i>
			<p>+91-8007 900 777</p>
		</div>
		<div class="righttopnav">
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>
		</div>	
	</div>
	
	
	<!-- ---------------------------     Container     -------------------------------- -->
	<div class="container">
		<nav>
			<div class="navleft">
				<i class="fas fa-leaf"></i>
				<div class="logo">GoGREEN</div>
			</div>
			<div class="navright">
				<div class="navlinkright" style="border-bottom:1px solid rgb(134,250,21);">
					<a href="index.php">Home</a>
				</div>
				<div class="navlinkright">
					<a href="about.php">About Us</a>
				</div>
				<div class="navlinkright">
					<a href="process.php">Process</a>
				</div>
				<div class="dropdown">
					<button class="dropbtn"><p>SERVICES</p></button>
					<div class="dropdown-content">
						<a href="collection.php">Collection</a>
						<a href="logistics.php">Logistics</a>
						<a href="epr.php">CERTIFICATE</a>
						<a href="Rlogistics.php">Reverse Logistics</a>
						<a href="awc.php">AWC</a>
					</div>
				</div>
				<div class="navlinkright">
					<a href="contact.php">Contact Us</a>
				</div>
			</div>
		</nav>
		<div class="inner-container">
			<p>SAVE THE ENVIRONMENT<span></span></p>
			<p style="font-size:17px; letter-spacing:3px;font-family:Arvo;padding-top:10px;">BY RECYCLING YOUR E-WASTE WITH US<span></span></p><br/><br/>
			<div style="display:flex;">
				<form action="donate.php" method="POST"><button name="donate" class="button">DONATE E-WASTE</button></form>
				<form action="sell.php" method="POST"><button name="donate" class="button">SELL E-WASTE</button></form>
			</div>
		</div>
	</div><!-- <button type="submit" class="form-control-submit" name="submit">Submit</button> -->

	
	<div class="fixx">
	<!-- ---------------------------     Content    -------------------------------- -->
	<div class="content"><br><br><br><br>
		<b><i class="fas fa-recycle" style="color:rgb(169,200,67);font-size:1.2em;"></i></b><br/>
		<p style="font-family:Abril;font-size:2em;">Welcome to GoGreen</p><h4 style="font-size:0.9em;">MORE ABOUT US</h4><br/>
		<p>Established in 2011, we are an MPCB Authorized Vendor for E-Waste collection<br/>and disposal for Pune City. We have a robust setup
		comprising<br/>a 7000 SQF facility at Lonikhad, backed by a fleet<br/>of specialized trucks for logistics support.</p>
		<div class="bx1"><i class="fas fa-door-open" style="background-color:rgba(44,169,123,0.9);"></i><h4>Better Support</h4><br/><p>We combine professionalism, superior knowledge and low prices to provide you with services unmatched by our competitors.</p></div>
		<div class="bx2"><i class="fas fa-clock" style="background-color:rgba(96,172,76,0.9);"></i><h4>Saving Time</h4><br/><p>We have the experience, personnel and resources to make the job run smoothly. We can ensure a job is done on time.</p></div>
		<div class="bx3"><i class="fas fa-hands-helping" style="background-color:rgba(140,190,56,0.9);"></i><h4>Higher Convenience</h4><br/><p>We offer doorstep pickup service. Our team of experts is always available to help you with any issues related to the E-waste Management.</p></div>
	</div>
	
	
	<!-- ---------------------------     Work-Container     -------------------------------- -->
	<div class="work-container">
		<div class="inner-work-container">
			<i class="fas fa-recycle"  style="black;font-size:1.2em;"></i>
			<p style="font-family:Abril;font-size:2em;">How it Works</p><br/>
			<p>With so many years of experience in the used IT Asset management services, can be able to make the proper combination of 3R's i.e. Reuse, Reduce, Recycle.</p>
			<div class="Rmantra">
				<div class="r1"><br/><br/><i class="fas fa-sync"></i><h4>REUSE</h4><br/><p>Reuse is one of the viable options in the recyling services, which can be used in various ways...</p></div>
				<div class="r1"><br/><br/><i class="fas fa-compress-arrows-alt"></i><h4>REDUCE</h4><br/><p>To make our planet greener we need to reduce the use of IT asset, refurbishment of IT products, implementing power saving options.</p></div>
				<div class="r1"><br/><br/><i class="fas fa-recycle"></i><h4>RECYCLE</h4><br/><p>This is the last option to be utilized if the IT asset is not working to the original manufacturing products.</p></div>
			</div>
		</div>
	</div>
	
	<!-- ---------------------------     Clients-Container     ------------------------------- -->
		<div class="clnt-container"><br><br><br><br>
			<b><i class="fas fa-recycle" style="color:rgb(169,200,67);font-size:1.2em;"></i></b><br/>
			<p style="font-family:Abril;font-size:2em;">Testimonials</p><h4 style="font-size:0.8em;">WHAT CLIENTS SAY</h4><br/><br>
			<div class="outerbox">
				<div class="box2"><i class="fas fa-quote-right" style="font-size:1.5em;"></i><br/><br/><p>"Great Customer Service. The service is smooth and. Information was accurate,responces to queries were turned around very fast.<br> Highly recomended!"</p><div class="innerimage1" style="margin:13px auto 7px auto;"></div><b>Avi Pandit</b><br/></div>
				<div class="box2"><i class="fas fa-quote-right" style="font-size:1.5em;"></i><br/><br/><p>"Couldn't be happier with the service. Resonable on price. Go-Green were fast and efficient, will<br> use again.<br> Thanks Guys!"<p><div class="innerimage2"  style="margin:19px auto 7px auto;"></div><b>Sara Padhman</b></div>
				<div class="box2"><i class="fas fa-quote-right" style="font-size:1.5em;"></i><br/><br/><p>"Recycling is important to me, so to have Go-Green take care of everything was great. Rest assured, they will recycle everthing possible."<p><div class="innerimage3"  style="margin:13px auto 7px auto;"></div><b>Ravi Tyagi</b></div>
			</div>
		</div>
	
	
	<!-- ---------------------------     FAQ-Container     -------------------------------- 
	<div class="faq-container"><br><br><br><br>
		<b><i class="fas fa-recycle" style="color:rgb(169,200,67);font-size:1.2em;"></i></b><br/>
		<p style="font-family:Abril;font-size:2em;">FAQ</p><h4 style="font-size:0.8em;">FREQUENTLY ASKED QUESTIONS</h4><br/>
		<div class="box2"><i class="fas fa-door-open" style="background-color:rgba(44,169,123,0.9);"></i><br/><h4>Question 1</h4><br/><p>We offer doorstep pickup service. We are just a phone call away.</p></div>			
		<div class="box2"><i class="fas fa-handshake" style="background-color:rgba(96,172,76,0.9);"></i><br/><h4>Question 2</h4><br/><p>We buy all types of branded Laptops/PC's, which makes the deal more cost-efficient for our clients.</p></div>
		<div class="box2"><i class="fas fa-user-friends" style="background-color:rgba(140,190,56,0.9);"></i><br/><h4>Question 3</h4><br/><p>Our team of friendly experts is always available to help you with any issues related to the E-waste Management.</p></div>
	</div>-->
	</div>
	
	<!-- ---------------------------     MSG-Container     -------------------------------- -->
	<div class="msg-container">
		<div class="inner-msg-container">
			<i class="fas fa-recycle"></i>
			<p class="message1">Send Us <b>Message</p></b><br><p>Get in touch with us about anything related to our company or services.</p><br/><br/>
			<form action="" method="POST">
				<input type="text" class="form-control" name="name" placeholder="Enter your Name" required><br/>
				<input type="text" class="form-control" name="email" placeholder="Enter Email Address" required><br/>
				<input type="textarea" class="form-control" name="msg" placeholder="Message" required><br/>
				<button type="submit" class="form-control-submit" name="submit">Submit</button>
			</form>
		</div>
	</div>
	
	
	<!-- ---------------------------     Footer     -------------------------------- -->
	<footer>
		<div class="mainblock1">
			<div class="block1">
				<i class="fas fa-leaf"></i>
				<div class="flogo">GoGREEN</div><br/>
				<p>One stop solution for your E-waste collection, we oversee end to end E-waste administration. Connect with us and handover your E-waste for safe and scientific way of recycling process. We also provide E-waste collection certificate.<br/>We are certified MPCB E-waste Collector Company.<br/>E-waste is toxic and hazrdous if not handled in the right way.</p>
			</div>
			<div class="block2">
				<br/><h3>CONTACTS</h3><br/>
				<p><i class="fas fa-map-marker-alt"></i>Gate: No. 24, Lonikand, Taluka-Haveli, Pune 411215, Maharashtra,India</p><br/>
				<p><i class="fas fa-envelope"></i>info@gogreen.in</p><br/>
				<p><i class="fas fa-phone-alt"></i>+91-8007 900 777</p><br/>
				<p><i class="fas fa-calendar-week"></i>Monday-Saturday</p><br/>
				<p><i class="fas fa-clock"></i>9am-6pm</p><br/>
			</div>		
		</div>
		<div class="mainblock2">
			<div class="block3">
				<h3>Quick Links</h3><br/>
				<a href="index.php">Home</a>
				<a href="about.php">About Us</a>
				<a href="process.php">Process</a>
				<a href="collection.php">Services</a>
				<a href="contact.php">Contact Us</a>
			</div>
			<div class="block4">
				<h3>FOLLOW US</h3><br/>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-google-plus-g"></i>
			</div>		
		</div>
		<div class="block5">
			<p>Copyright <i class="far fa-copyright"></i> GoGreen, 2011-2020, All Rights Reserved.</p>
		</div>
	</footer>
	
</body>
</html>