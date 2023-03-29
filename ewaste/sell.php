<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="donate.css">
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
	<div class="under-header" style="height:70px;"></div>
	<div class="contact-container">
		<div class="contact-bg">
			<div class="inner-bg">
				<div class="left-inner-bg">
					<p style="font-family:Abril;font-size:1.5em;">SELL</p>
					<p style="font-size:0.9em;text-transform:uppercase;">We endeavour to make the process extremely simple for you and make customer satisfaction the core of our service.</p>
				</div>
				<div class="right-inner-bg">
					<a href="index.php">HOME</a>
					<p>/</p>
					<a href="#">SELL</a>
				</div>
			</div>
		</div>
		<div class="contact-content">
			<!--<div class="maincontent1">
				<b><i class="fas fa-recycle" style="color:rgb(169,200,67); font-size:1.2em;"></i></b><br/>
				<h3>Benefits of Recycling</h3><br/>
				<div class="inner-maincontent1">
					<div class="left-content1">
						<p>
							<li>Reduces the amount of waste sent to landfills and incinerators.</li>
							<li>Lesser waste ending up in landfills and incinerators means lower soil pollution<br/> and carbon emissions.</li>
							<li>Reduces air and water pollution which is caused by hazardous waste<br/> disposal.</li>
							<li>Conserves resources by recovering metals and other useful materials.</li>
							<li>Reduces the volume of greenhouse gas emissions.</li>
							<li>Creates new jobs opportunities both for skilled and semi-skilled<br/> individuals.</li>
							<li>Helps the economy by boosting trade in the form of a second market<br/> for recycled products.</li>
						</p>
					</div>
					<div class="right-content1">
						
					</div>
				</div>
			</div><br><br><br>	
			<div class="maincontent2">
				<b><i class="fas fa-recycle" style="color:rgb(169,200,67); font-size:1.2em;"></i></b><br/>
				<h3>Why Donate your E Waste</h3><br/>
				<div class="inner-maincontent2">
					<div class="left-content2">
						
					</div>
					<div class="right-content2">
						<p>
							Electronic products are made up of valuable resources and materials,<br/> including metals, plastics, and glass, all of which require energy to<br/> mine and manufacture.
							Donating or recycling consumer electronics<br/> conserves our natural resources and avoids air and water pollution,<br/> also as greenhouse emission emissions that are caused by<br/> manufacturing virgin materials.<br><br>
							For example:
							<li>Recycling a million laptops saves the energy equivalent to<br/> the electricity used by 3,657 homes.</li>
							<li>For every million cell phones we recycle, 35 thousand pounds of<br/> copper, 772 pounds of silver, 75 pounds of gold and 33 pounds of<br/> palladium are often.</li>
						</p>
					</div>
				</div>	
			</div><br/><br><br>-->	
			<div class="maincontent3">
				<div class="form-box">
					<div  class="donate-h3"><b><i class="fas fa-recycle" style="color:white; font-size:1.2em;"></i></b><br/>
						<h3>SELL E-WASTE</h3>
					</div>
					<div class="lower-form">
						<form action="sell.php" method="POST" class="input-group" style="font-size:0.9em;text-align:left;">
							<br/>Full Name<span style="color:rgb(240,4,4);">&nbsp;*</span><br/><input type="text" class="input-field" name="name" required><br/><br/>
							You are?<span style="color:rgb(240,4,4);">&nbsp;*</span><br/>
							<input type="radio"  name="io" value="individual" style="margin-top:9px;">&nbsp; Individual&nbsp;&nbsp;&nbsp;
							<input type="radio"  name="io" value="organization"	style="margin-top:9px;">&nbsp; Organization<br/><br/><br/>
							Select Date<span style="color:rgb(240,4,4);">&nbsp;*</span><br/><input type="date" class="date" name="date" required><br/><br/>
							<label for="wastetype">What Things You Want To Sell?</label><span style="color:rgb(240,4,4);">&nbsp;*</span><br/>
							<select id="cars" name="wastetype[]" class="list" size="4" multiple>
								<option value="Laptops">Laptops</value>
								<option value="Desktops">Desktops</value>
								<option value="LED/ LCD Monitors">LED/ LCD Monitors</value>
								<option value="Printers">Printers</value>
								<option value="Servers  & Workstations">Servers & Workstations</value>
								<option value="Projectors">Projectors</value>
								<option value="Routers/ Switches">Routers/ Switches</value>
								<option value="PCB">PCB</value>
								<option value="Cables/ Adapters">Cables/ Adapters</value>
								<option value="Household Electrical Waste">Household Electrical Waste</value>
								<option value="AC">AC</value>
								<option value="Refrigerator">Refrigerator</value>
								<option value="Cooler">Cooler</value>
								<option value="LED/ LCD/ CRT Televisions">LED/ LCD/ CRT Televisions</value>
								<option value="Boilers/ Geyser">Boilers/ Geyser</value>
								<option value="Ceiling Fan">Ceiling Fan</value>
								<option value="Music Systems">Music Systems</value>
								<option value="Toaster/ Mixer">Toaster/ Mixer</value>
							</select><br/><br/>	
							Contact Number<span style="color:rgb(240,4,4);">&nbsp;*</span><br/><input type="text" class="input-field" name="phn" required><br/><br/>							
							Email Id<span style="color:rgb(240,4,4);">&nbsp;*</span><br/><input type="text" class="input-field" name="email"required><br/><br/>
							Address<br/><textarea class="input-field" name="addr" style="height:4em;padding:2px 2px;"></textarea><br/>
							<br/><button class="submit-btn" name="submit" >Submit</button><br/><br/><br/>
					</form>
					</div>
				</div>
			</div>
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
			$ans=$_POST['io'];
			if($ans=="individual"){
				$type="Individual";
			}
			else{
				$type="Organization";
			}
			$date=$_POST['date'];
			$wtype=$_POST['wastetype'];
			$email=$_POST['email'];
			$phone=$_POST['phn'];
			$address=$_POST['addr'];
			
			//echo $name, $ans, $date, $email, $phone,$address;
			//print_r($wtype);
			$query="INSERT INTO vendor(vname,vtype,vphone,vemail,vaddr,e_id) values ('$name','$type','$phone','$email','$address',1)";
			pg_query($query) or die("Error While Inserting!");
			
			$query="Select * from vendor";
			$result=pg_query($query) or die("Error While Inserting!");
			$result=pg_query($con,$query);
			while($row=pg_fetch_row($result)){
				if($row[1]==$name){
					$v_id=$row[0];
				}
			}
			$arr=implode(" ",$wtype);
			$query="INSERT INTO ewaste(ewdes,v_id,ad_id) values ('$arr','$v_id',1)";
			pg_query($query) or die("Error While Inserting!");
			$query="INSERT INTO appointment(apdate,v_id,ad_id) values ('$date','$v_id',1)";
			pg_query($query) or die("Error While Inserting!");
			?><script>
                alert("Request Sent!!");
			</script><?php
		}
	?>
	
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