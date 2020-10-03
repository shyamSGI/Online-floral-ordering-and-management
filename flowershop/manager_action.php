<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
	require 'manager_sidebar.php';
$user_id=$_SESSION['id'];  
$user=$_SESSION['user'];
  
  
  
  ?>

	
	
			<?php if(isset($_GET['logged'])): ?>
			<?php  
			echo "wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
			
			header("location:manager_action.php?user='$user'");	
			
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
										<a href=\"manager_action.php?order_confirm=true&order_id={$arrr[$i][0]}\" class=\"btn btn-warning btn-sm\">Confirm the order</a>
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
									header('location: manager_action.php?confirmed=true&user=$user');
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
										<a href=\"manager_action.php?order_complete=true&order_id={$arrr[$i][0]}\" class=\"btn btn-warning btn-sm\">Complete the order</a>
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
								
						header('location: manager_action.php?confirmed=true&user=$user');
						
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



			<?php elseif(isset($_GET['remove'])): ?>	
		
			<?php elseif(isset($_GET['receiver_name'])): ?> 
				
			
			
			<?php elseif(isset($_GET['view_order'])): ?> 
			<head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Drapiez Colombo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
	
			
			
			<?php			require 'header.php';
					
							//echo $user_id;
								$sql1= "SELECT * FROM users WHERE id='$user_id'";
											$arr1=mysqli_query($con,$sql1);
											$row=mysqli_fetch_array($arr1);
							$user_name= $row['name'];
						//	echo $user_name;
							$sql1= "SELECT * FROM orders WHERE customer_name='$user_name'";
											$arr1=mysqli_query($con,$sql1);
											$row=mysqli_fetch_all($arr1);
									
									$no=0;$i=0;
									$no=count($row);
									if($no==0)
									{
										echo "<h2>No any active orders</h2>";
									}
									else
									{
										while($i<$no)
										{
											if($row[$i][8]=="order"){
											echo "<h1> Your Order is Under Pregress and will confirm soon!</h1>  ";
											}
											else{echo "<h1> Your Order is Confirmed and will deliver on the date!</h1>  ";}
											
										echo "<table class='table table-bordered table-striped'><tr>
                                        <tr><th>Order Details  </th></tr>
                                        <tr><th>Order Date</th><th>Name</th><th>Category</th><th>Item</th><th>Price</th><th>Delivery Information</th><th>Delivery Date</th></tr>
										<th>{$row[$i][1]}</th>
                                        <th>{$row[$i][2]}</th>
                                        <th>{$row[$i][3]}</th>
										<th>{$row[$i][4]}</th>
										<th>{$row[$i][5]}</th>
										<th>{$row[$i][6]}</th>
										<th>{$row[$i][7]}</th>

                                        </tr>  </table>";
										$i++;
										}
										//echo " t".$no;
									}
											
						
						
			?>
			
			

			
			
			<?php else: ?>
			
			<?php endif;?>