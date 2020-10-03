<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
$user_id=$_SESSION['id'];  

  ?>
	
	
	
	
	
	
	
	
	<?php if(isset($_GET['add_to_cart'])): ?>
	
  <?php  
   $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
  
  
  //$add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
   // $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    
						 $sql1= "SELECT * FROM users WHERE id='$user_id'";
									$arr1=mysqli_query($con,$sql1);
									$row1=mysqli_fetch_array($arr1);
						 $sql2= "SELECT * FROM flowers WHERE id='$item_id'";
									$arr2=mysqli_query($con,$sql2);
									$row2=mysqli_fetch_array($arr2);
	
	$customer_name=$row1['name'];
	
	$cat=$row2['category'];
	$item=$row2['flower_name'];
	$price=$row2['price'];

	$add_to_cart="insert into cart(customer_id, customer_name, category, item, price) values ('$user_id','$customer_name','$cat','$item','$price')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart);
	
				header('location: products.php?all_flowers=true');
				?>




			<?php elseif(isset($_GET['remove'])): ?>	
			<?php
			$del_id=$_GET['del_id'];
			$sql1= "DELETE FROM cart WHERE id='$del_id'";
			$arr1=mysqli_query($con,$sql1);	
	
	
	
				header('location: cart.php');
			?>
			
			
			<?php //elseif(isset($_GET['receiver_name'])&isset($_GET['delivery_address'])&isset($_GET['delivery_date'])): ?>  
			
					<?php elseif(isset($_GET['receiver_name'])): ?> 
					<?php	
						$rname=$_GET['receiver_name'];
						$deladdress=$_GET['delivery_address'];
						$del_info=$rname.$deladdress;
						$del_date=$_GET['delivery_date'];
						
						
						echo $rname;
						echo $deladdress;
						echo $del_date;
						echo $user_id;
						
						 $sql1= "SELECT * FROM cart WHERE customer_id='$user_id'";
									$arr1=mysqli_query($con,$sql1);
									$row1=mysqli_fetch_all($arr1);
						//echo "{$row1[0][3]}";
									$no=0;
                                  $no=count($row1);
                                $i=0;
								echo $del_info;
                                while($i<$no)
                                { 
                                 echo "<tr>
                                        <td>{$row1[$i][0]}</td>
                                        <td>{$row1[$i][1]}</td>
                                        <td>{$row1[$i][2]}</td>
                                        <td>{$row1[$i][3]}</td>
										<td>{$row1[$i][4]}</td>
										<td>{$row1[$i][5]}</td>
                                        </tr>";
										
										$s2=$row1[$i][2];
										$s3=$row1[$i][3];
										$s4=$row1[$i][4];
										$s5=$row1[$i][5];
										
									
										
										
									$sql2= "INSERT INTO orders (order_date,customer_name, category, item, amount, delivery_info, delivery_date, status)
									VALUES ('$del_date','$s2','$s3','$s4','$s5','$del_info','$del_date','not confirmed')";
									//$arr1=mysqli_query($con,$sql2);	
										if(mysqli_query($con,$sql2))
										{
											$sql1= "DELETE FROM cart WHERE customer_id='$user_id'";
											$arr1=mysqli_query($con,$sql1);
											echo "okok";
										}
										else{  echo "nono";}
										
										
                                  $i++;
                                }			
					//	header('location: index.php');
						

						?>
			
			
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