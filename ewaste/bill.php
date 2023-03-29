<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Page Title</title>
<link rel="stylesheet" href="bill.css">
<link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>

	<!--<form action="bill.php" method="POST">
		How Many Items? <span style="color:rgb(240,4,4);">&nbsp;*</span><br/><input type="text" class="count" name="count" required><br/><br/>
		<button class="submit" name="ok" value="<?/*php echo $row[0]*/?>">OK</button>
	</form>-->
	
<?php
	$port="port=5432";
	$host="host=127.0.0.1";	
	$dbname="dbname=ecs";
	$credentials="user=postgres password=root";				
	$con=pg_connect("$host $port $dbname $credentials");
?>

<?php		
			if(isset($_POST['add'])){	
				$name=$_POST['product'];
				$qty=$_POST['quantity'];
				$query="INSERT INTO data(dname,quantity) values ('$name','$qty')";
				pg_query($query) or die("Error While Inserting!");
			}
		?>
	<p id="item-heading">ADD ITEMS</p>
	<table class="table t1" style="background-color:#f5f5f5;">
		<tr>
            <th>No.</th>
            <th style="width:100px;">Waste Types</th>
            <th>Qty</th>
        </tr>
		<form action="bill.php" method="POST">
		<tr>
                        <td>1</td>
                        <td>
                           <select name="product" class="list" size="1" style="margin:0px 30px;">
										<?php
											$query2="SELECT * from products";
											$result2=pg_query($con,$query2);
											while($row2=pg_fetch_row($result2)){ ?>
												<option value="<?php echo $row2[1]?>">
													<?php echo $row2[1]?>
												</option>
												<?php
											}	
										?>
							</select>
                        </td>
                        <td>
                          <input type="number" name="quantity" style="margin:0px 20px;">
                        </td>
						<td>
							<button class="submit" name="add" value="add">Add</button>
						</td>
		</tr>
		</form>
	</table>	
 
	<p id="bill-heading">BILL</p>
	<table  class="table t2">
    <tr>
        <th> No.</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th class="text-center">Price</th>
        <th class="text-center">Total</th>
        </tr>
		
		<?php 
			$i=0;
			$price;
			$total=0;
			$query3="SELECT * from data";
			$result3=pg_query($con,$query3);
			while($row3=pg_fetch_row($result3)){
				$i++;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row3[1];?></td>
					<td><?php echo $row3[2];?></td>
					<td><?php 
							$query4="SELECT * from products";
							$result4=pg_query($con,$query4);
							while($row4=pg_fetch_row($result4)){
								if($row4[1]==$row3[1]){
									echo $row4[2];
									$price=$row4[2];
								}
							}?>
					</td>
					<td><?php echo $price*$row3[2]; $total+=($price*$row3[2])?></td>
				</tr>
				<?php
			}
		?>
	
						<td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td class="text-right text-dark" >
                                <p><strong style="padding:5px;"> Sub Total:  </strong><?php echo $total;?></p>
                                <p><strong style="padding:5px;"> Tax (5%) :  </strong><?php echo (($total*5)/100);?></p>
                           </td>
                        </tr>
                        <tr>
							<td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td class="text-right text-dark">
                              <p><strong style="padding:5px;"> Total: </strong><?php echo $total-(($total*5)/100);?></p>
                           </td>
                        </tr>
                     </table>

</body>
</html>	


