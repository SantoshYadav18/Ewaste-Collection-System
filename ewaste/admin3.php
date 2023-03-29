<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
	<div class="container">
		<div class="sidebar">
			<i class="fas fa-leaf"></i>
			<span class="logo">GoGREEN</span>
			
			<div class="adminimg">
			</div>
			<p style="text-align:center;">Admin</p>
			
			<div class="ud"></div>
			
			<div class="links">
				<div class="box"><a href="admin.php">Appointments</a></div>
				<div class="box"><a href="admin2.php">Employees</a></div>
				<div class="box"><a href="#">Customers</a></div>
				<div class="box"><a href="admin4.php">Vendors</a></div>
			</div>
		</div>
		<div class="content2">
			<h3>Customers</h3>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th>Email</th>
					<th>Description</th>
					<th>Date</th>					
				</tr>				
			<?php 
				$port="port=5432";
				$host="host=127.0.0.1";	
				$dbname="dbname=ecs";
				$credentials="user=postgres password=root";				
				$con=pg_connect("$host $port $dbname $credentials");
				$query="SELECT * from customer";
				$result=pg_query($con,$query);
				while($row=pg_fetch_row($result)){
					?>
					<tr>
						<td><?php echo $row[0];?></td>
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
						<td><?php echo $row[4];?></td>
						<td><?php echo $row[5];?></td>
						<td><?php echo $row[6];?></td>
					</tr>
					<?php
				}	
			?>
			</table>
		</div>
	</div>		
</body>
</html>