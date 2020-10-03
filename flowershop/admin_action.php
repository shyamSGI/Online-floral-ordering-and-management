			 
<?php 
session_start();
require 'connection.php';
require 'sidebar.php';
$user=$_SESSION['user'];

?>        
<head>
      <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">  
    </head>      
		
		
		
		<?php if(isset($_GET['logged'])): ?>
			<?php  
			//echo "wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
			
			header("location:admin_action.php?overview=true&user='$user'");	
			
			?>
			
			
			
			
		<?php elseif(isset($_GET['orders'])): ?>
			<?php
			echo "<h1>Customer Orders</h1>";
			
                                 $sql1= "SELECT * FROM orders WHERE status='not confirmed'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Customer Orders Found</h1>";  }  
								  
								  else{ ?>
                                  <h1>Orders</h1>
                                  <table class="table table-bordered">
                                   <thead>
                                  <tr>
                                    <th>No:</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Order</th>
									<th>Amount</th>
									<th>Delivery Info</th>
									
									<th>Delivery Date</th>
                                   
                                   
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][4]}</td>
										<td>Rs:{$arrr[$i][5]}</td>
										<td>{$arrr[$i][6]}</td>
										<td>{$arrr[$i][7]}</td>
										<td>{$arrr[$i][8]}</td>
										<td>
										<a href=\"admin_action.php?order_confirm=true&order_id={$arrr[$i][0]}\" class=\"btn btn-warning btn-sm\">Confirm the order</a>
                                        </td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
					<?php elseif(isset($_GET['order_confirm'])): ?>
						<?php $oid=$_GET['order_id'];
							$sql1= "UPDATE orders SET status='confirmed' WHERE id='$oid'";
							
									$arr1=mysqli_query($con,$sql1);
									header('location: admin_action.php?confirmed=true&user=$user');
						?>
			
					<?php elseif(isset($_GET['confirmed'])): ?>
			<?php
			echo "<h1>Customer Orders</h1>";
			
                                 $sql1= "SELECT * FROM orders WHERE status='confirmed'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Confirmed Orders Found</h1>";  }  
								  
								  else{ ?>
                                  <h1>Orders</h1>
                                  <table class="table table-bordered">
                                   <thead>
                                  <tr>
                                    <th>No:</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Order</th>
									<th>Amount</th>
									<th>Delivery Info</th>
									
									<th>Delivery Date</th>
                                   
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][4]}</td>
										<td>Rs:{$arrr[$i][5]}</td>
										<td>{$arrr[$i][6]}</td>
										<td>{$arrr[$i][7]}</td>
										
										<td>
										<a href=\"admin_action.php?order_complete=true&order_id={$arrr[$i][0]}\" class=\"btn btn-warning btn-sm\">Complete the order</a>
                                        </td>
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			<?php elseif(isset($_GET['order_complete'])): ?>
			<?php
						$oid=$_GET['order_id'];
						$sql1= "SELECT * FROM orders WHERE status='confirmed' AND id='$oid'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_assoc($arr1);
									
						$cname=$arrr['customer_name'];
						$amount=$arrr['amount'];		
									
						$sql2= "INSERT INTO sales (date, customer_name, amount)  VALUES (now(),'$cname','$amount')";
									$arr1=mysqli_query($con,$sql2);		
									
						$sql21= "DELETE FROM orders WHERE status='confirmed' AND id='$oid'";
									$arr1=mysqli_query($con,$sql21);		
								
						header('location: admin_action.php?confirmed=true&user=$user');
						
			?>
			
			
			<?php elseif(isset($_GET['sales'])): ?>
			<?php
			
			
			echo "<h1>Sales</h1>";
			echo "<a href='report.php' class='btn btn-success'>Print Sales Reports</a>";
			
			
                                 $sql1= "SELECT * FROM sales";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);
								  //echo $no;
								  
                                  if($no==0) { echo "<h3>No Sales Found</h1>";  }  
								  
								  else{ ?>
                                  
                                  <table class="table table-bordered">
                                   <thead>
                                  <tr>
                                    <th>No:</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Amount</th>
                                    
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>Rs:{$arrr[$i][3]}</td>
										
										
                                        </tr>";
                                  $i++;
                                }
								
					
								  }
								
                                ?>  
                                </tbody>
                                </table>
			
		<?php elseif(isset($_GET['overview'])): ?>
			<?php //overview/////////////////////////////////////////////////
				 $sql1= "SELECT id FROM users";
				$arr1=mysqli_query($con,$sql1);
				$no_users=count(mysqli_fetch_all($arr1));
				
				$sql1= "SELECT id FROM orders WHERE status='not confirmed'";
				$arr1=mysqli_query($con,$sql1);
				$no_orders=count(mysqli_fetch_all($arr1));
				
				$sql1= "SELECT id FROM orders WHERE status='order'";
				$arr1=mysqli_query($con,$sql1);
				$no_corders=count(mysqli_fetch_all($arr1));
				
				$sql1= "SELECT id FROM sales";
				$arr1=mysqli_query($con,$sql1);
				$no_sales=count(mysqli_fetch_all($arr1));
				
				$sql1= "SELECT date FROM sales";
				$arr1=mysqli_query($con,$sql1);
				$last_date=count(mysqli_fetch_all($arr1));
				
			?>
			<div class="panel panel-primary">
			<div class="panel-heading">OVERVIEW</div>
			<div class="panel-body">
			
			<table>
			<tr>
			<td><div class="panel panel-primary"><div class="panel-heading">Date Time  : <?php echo date("Y/m/d")."  ".date("h:i:sa");?> </div></div>
			</td>
			</tr>
			<tr><td>
			<div class="panel panel-primary"><div class="panel-heading">Number of Customers <?php echo $no_users;  ?> </div></div>
			</td></tr>
			<tr><td>
			<div class="panel panel-primary"><div class="panel-heading">Number of New Orders<?php echo $no_orders;  ?></div></div>
			</td></tr>
			
			<tr><td>
			<div class="panel panel-primary"><div class="panel-heading">Number of Confirmed Orders<?php echo $no_corders;  ?></div></div>
			</td></tr>
			<tr><td>
			<div class="panel panel-primary"><div class="panel-heading">Number of Sales<?php echo $no_sales;  ?></div></div>
			</td></tr>
			<tr><td>
			<div class="panel panel-primary"><div class="panel-heading">Last sale date and time <?php echo $last_date;  ?></div></div>
			</td></tr>
			</table>
			
			</div>
			</div>
		<?php elseif(isset($_GET['products'])): ?>
			<?php	echo "<a href='admin_action.php?add_product=true&user=$user' class='btn btn-success'>Add Products</a>";
				  $sql1= "SELECT * FROM flowers";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);

						 ?>
                                  <h1>Products</h1>
                                  <table class="table table-bordered">
                                   <thead>
                                  <tr>
                                    <th>No:</th>
                                    <th>Item</th>
                                    <th>Category</th>
                                    <th>Image url</th>
                                    <th>Image</th>
									<th>Price</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                <?php
                                $i=0;
                                while($i<$no)
                                { 
                                  echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][3]}</td>
										<td><img style=width:20% src={$arrr[$i][3]}></td>
										<td>Rs:{$arrr[$i][4]}</td>
										<td>
										<a href=\"admin_action.php?delete_product=true&del_id={$arrr[$i][0]}\" class=\"btn btn-danger btn-sm\">Delete</a>
										</td>
                                        </tr>";
                                  $i++;
                                }

                                ?>  
                                </tbody>
                                </table>
				
   
		<?php elseif(isset($_GET['add_product'])): ?>
				<!--<form action="admin_action.php?add_product=true" method="post">-->
		
<div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
				<form>
				<div class="searchBox input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
				<input id="text" type="text" class="inputBox form-control" name="flower_name" placeholder="Enter the name:" required="" />
				</div>
				<div class="panel panel-default">
				</div>
				
				<div>
				<label>Choose the category 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
				
				<select name="flower_type" id="flower-select">
				<option value="">--Please choose an option--</option>
				<option value="fresh">Fresh Flowers</option>
				<option value="mix">Mix Flowers</option>
				<option value="artificial">Artificial Flowers</option>
				</select>
				</div>
				<div class="panel panel-default">
				</div>

				<div>
								<div class="file-field">
								<div class="btn btn-primary btn-sm float-left">
								<span>Choose the image file &nbsp;&nbsp;&nbsp; :</span>
								<input type="file"  name="flower_image">
								</div>
								
								</div>
				</div>								
				
				<div class="panel panel-default">
				</div>
				
				<div class="searchBox input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				<input id="text" type="text" class="inputBox form-control" name="flower_price" placeholder="Enter the Price: Rs:" required="" />
				</div>
				
				<div class="panel panel-default">
				</div>
				
				<div style="margin-top:10px">
				<button  name="search" class="btn btn-success" >Add</button>
				</div>
				</form>  
			</div>	</div> </div> </div>
			<?php  elseif(isset($_GET['flower_name'])&&isset($_GET['flower_type'])&&isset($_GET['flower_image'])&&isset($_GET['flower_price'])):	?>
			<?php 
			echo "ssssssssssssssss";
			$ppid=$_GET['flower_name'];
		$oppid=$_GET['flower_type'];
		$oppssid=$_GET['flower_image'];
		$image="img/".$oppssid;
		
		$opsspid=$_GET['flower_price'];
		
				
		echo $ppid;
		echo $oppid;
		echo $oppssid;
		echo $opsspid;
		
		$sql1= "INSERT INTO flowers (`flower_name`, `category`, `image`, `price`) VALUES ('$ppid','$oppid','$image','$opsspid')";
									$arr1=mysqli_query($con,$sql1);
		
			header("location:admin_action.php?products=true&user='$user'");
			?>
					
			
			
				
				<?php elseif(isset($_GET['print_sales'])): ?>
						<?php require('pdf/fpdf.php');?>
							 

						<?php
						//require('fpdf.php');

//Connect to your database
include 'connection.php';
ob_start();
//Create new pdf file
$pdf=new FPDF();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page


//print column titles
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(10);
$pdf->SetX(25);
$pdf->Cell(30,6,'CODE',1,0,'L',1);
$pdf->Cell(100,6,'NAME',1,0,'L',1);
$pdf->Cell(30,6,'PRICE',1,0,'R',1);

//Send file
$pdf->Output();
						?>
				
		
		<?php elseif(isset($_GET['delete_product'])): ?>
		<?php
			$oppid=$_GET['del_id'];
			$sql1= "DELETE FROM FLOWERS WHERE id='$oppid'";
				$arr1=mysqli_query($con,$sql1);
			
		header("location:admin_action.php?products=true&user='$user'");
		
		?>
		<?php else: ?>
			<?php 
			
			?>
   
		<?php //end; ?>
		

		
		<?php 
								
									
		function runMyFunction() {
		$ppid=$_GET['pid'];
		$oppid=$_GET['opid'];
		echo $ppid;
		echo $oppid;
				echo 'I just ran a php function';	
			header("location:action.php?single=$ppid");	
					}				
		
		
				
		?>
		
		
		<?php endif;?>
		<?php //require_once 'footer.php'; ?>