<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
	<header>
		<nav>
			<div class="navleft">
					<i class="fas fa-leaf"></i>
					<div class="logo">GoGREEN</div>
			</div>
			<div class="navright">
				<div class="navlinkright">
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
	</header>
	<div class="under-header"></div>
	<div class="loginR">
		<div class="form-box" style="height:450px;">
			<div class="button-box">
				<button type="button" class="toggle-btn" style="background:linear-gradient(to right,rgb(151,244,60),rgb(228,245,27));font-family:MonserratB;"><a href="#">Log In</a></button>
				<button type="button" class="toggle-btn"><a href="register.php" style="font-family:Monserrat;">Register</a></button>
			</div>
			<div class="icons">
				<i class="fab fa-facebook-f" style="padding:5px 9px;"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-google-plus-g"></i>
			</div>
			<form action="login.php" method="POST" id="login" class="input-group">
				<input type="text" class="input-field" placeholder="Enter User Id" name="name" required style="font-family:Monserrat;">
				<input type="password" class="input-field" placeholder="Enter Password" name="pwd" required style="font-family:Monserrat;">
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="submit" style="font-family:MonserratB;">Log In</button>
			</form>
		</div>
	</div>
	
	<?php
		if(isset($_POST['submit'])){
			$port="port=5432";
			$host="host=127.0.0.1";	
			$dbname="dbname=ecs";
			$credentials="user=postgres password=root";				
			$con=pg_connect("$host $port $dbname $credentials");
		
			$name=$_POST['name'];
			$pwd=$_POST['pwd'];
			
			
			$query="SELECT * from admin;";
					$result=pg_query($con,$query);
					while($row=pg_fetch_row($result)){
						if($row[2]==$pwd && $row[1]==$name){
							header('location:admin.php');
						}
					}
					
			$query="SELECT * from employee;";
					$result=pg_query($con,$query);
					while($row=pg_fetch_row($result)){
						if($row[1]==$pwd && $row[1]==$name){
							$_SESSION['name']=$row[1];
							header('location:employee.php');
						}
					}		
			echo "Invalid ID or Password";
		}
	?>
	<!-- ---------------------------     Footer     --------------------------------->
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
				<h3>Follow Us</h3><br/>
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