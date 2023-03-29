<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="employee.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
<?php

			$port="port=5432";
			$host="host=127.0.0.1";	
			$dbname="dbname=ecs";
			$credentials="user=postgres password=root";				
			$con=pg_connect("$host $port $dbname $credentials");

			$name='Suraj';//$_SESSION['name'];//fakta name navacha variable set kelan na ki kaam houn jail.. Youtube var video baghitla na tar jo sihnin karel tyacha naam pan gheu shakto..
			//Or nasel kahi chalat tar hardcode kr ikde.. haan cshalel
			$query="SELECT * from employee";
			$result=pg_query($con,$query);
			while($row=pg_fetch_row($result)){ 
				if($row[1]==$name){
					$eid=$row[0];
				}
			}
				
			$query="SELECT * from vendor";
			$result=pg_query($con,$query);
			while($row=pg_fetch_row($result)){ 
				if($row[6]==$eid){
					?>
						<div class="info">
							<div class="outer">
								<div class="image"></div>
								<div class="inner" style="font-size:1.2em;">
									<b style="color:black;">Pickup Date :</b> 
									<?php
										$query2="SELECT * from appointment";
										$result2=pg_query($con,$query2);
										while($row2=pg_fetch_row($result2)){
											//echo $row2[1];
											if($row2[2]==$row[0])
												echo $row2[1];
										} 
									?>
								</div>										
							</div>
							<div class="dd">
								PICKUP DETAILS
							</div>
							<div class="data">
								<p><span><i class="fas fa-user"></i> Name : </span><?php echo " $row[1]";?></p>
								<p><span><i class="fas fa-map-marker-alt"></i> Address : </span><?php echo" $row[5]";?></p>
								<p><span><i class="fas fa-phone-alt"></i> Contact No : </span><?php echo " $row[3]";?></p>
								<p><span><i class="fas fa-envelope"></i> Email Id : </span><?php echo" $row[4]";?></p>													
							</div>
							<form action="bill.php" method="">
								<button class="submit" name="generate" value="<?php echo $row[0]?>">Generate a Bill</button>
							</form>
						</div>					
					<?php
				}
			}
$query="delete from data where quantity<=100";
$result=pg_query($con,$query);
?>
</body>
</html>