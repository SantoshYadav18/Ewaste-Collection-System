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
				<div class="box"><a href="#">Appointments</a></div>
				<div class="box"><a href="admin2.php">Employees</a></div>
				<div class="box"><a href="admin3.php">Customers</a></div>
				<div class="box"><a href="admin4.php">Vendors</a></div>
			</div>
		</div>
		<div class="content">
			<?php
				$port="port=5432";
				$host="host=127.0.0.1";	
				$dbname="dbname=ecs";
				$credentials="user=postgres password=root";				
				$con=pg_connect("$host $port $dbname $credentials");

				$query="SELECT * from vendor;";
				$result=pg_query($con,$query);
				while($row=pg_fetch_row($result)){
					if($row[6]==1){
					?>
						<div class="request">
							<div class="outer">
								<div class="image"></div>
								<div class="inner">
									<span>Vendor Name: </span><?php echo "$row[1]";?><br/>
									<span>Vendor Type: </span><?php echo "$row[2]";?><br/>
									<span>Vendor Contact No: </span><?php echo "$row[3]";?>
								</div>	
									
							</div>
							<div class="data">
								<span>Vendor Email Id: </span><?php echo"$row[4]";?><br/>
								<span>Vendor Address: </span><?php echo"$row[5]";?><br/>								
								<span>Select Employee: </span><br/>
								
								<div class="buttons">
									<form action="admin.php" method="POST">
										<select name="employee" class="list" size="1">
											<?php
												$query2="SELECT * from employee";
												$result2=pg_query($con,$query2);
												while($row2=pg_fetch_row($result2)){ ?>
													<option value="<?php echo $row2[1]?>">
														<?php echo $row2[1]?>
													</option>
													<?php
												}	
											?>
										</select>
										<button class="submit" name="approve" value="<?php echo $row[0]?>">Approve</button>
									</form>
									<form action="admin.php" method="POST" style="margin-top:33px;position:relative;left:-200px;">
										<button class="submit" name="reject" value="<?php echo $row[0]?>">Reject</button>
									</form>
								</div>
							</div>
						</div>
					<?php
					}
				}
			?> 
			<?php
				if(isset($_POST['approve'])){
					$id=$_POST['approve'];
					$emp=$_POST['employee'];
					
					
					$query="SELECT * from employee";
					$result=pg_query($con,$query);
					while($row=pg_fetch_row($result)){ 
						if($row[1]==$emp){
							$eid=$row[0];
						}
					}
					
					/*$query="SELECT * from vendor";
					$result=pg_query($con,$query);
					while($row=pg_fetch_row($result)){ 
						if($row[0]==$id){
							$vid=$row[0];
						}
					}
					*/
					$query="update vendor set e_id=$eid where v_id=$id";
					$result=pg_query($con,$query);
					?><script>
						alert("Request Approved!!");
					</script><?php
					header('location:admin.php');
				}
			?>
			<?php
				if(isset($_POST['reject'])){
					
					$id=$_POST['reject'];
					$query="Delete from appointment where v_id='$id'";
					pg_query($query);
					$query="Delete from ewaste where v_id='$id'";
					pg_query($query);
					$query="Delete from vendor where v_id='$id'";
					pg_query($query);
					?><script>
						alert("Request Rejected!!");
					</script><?php
					header('location:admin.php');
				}
			?>
		</div>
	</div>		
</body>
</html>