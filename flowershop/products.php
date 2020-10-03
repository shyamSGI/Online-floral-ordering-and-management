<?php
    session_start();
    require 'check_if_added.php';
	require 'connection.php';
?>
<!DOCTYPE html>
<html>
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Drapiez Colombo Store!</h1>
                    <p>We have the best decoration services, we have all in one place.</p>
                </div>
            </div>
       
            <br><br>
			
			
			
			
		<?php if(isset($_GET['all_flowers'])): ?>
				<div class="container">
			<div class="row">
										 <?php $sql1= "SELECT * FROM flowers";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);

										?>
                                  <!--<h1>Orders</h1>-->
                                  <table class="table table-bordered">
                                   
                                <tbody> 
								
                                <?php
                                $i=0;
								
								
                                while($i<$no)
                                { 
                                 /* echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][3]}</td>
										<td><img style=width:20% src={$arrr[$i][3]}></td>
										<td>{$arrr[$i][4]}</td>
										<td>
										<a href=\"single={$arrr[$i][0]}\" class=\"btn btn-danger btn-sm\">Delete</a>
										</td>
                                        </tr>";*/
										
										echo" 
										
										<div class='col-md-3 col-sm-6'>
										<div class='thumbnail'>
										<a href=cart.php>
										
										<img src={$arrr[$i][3]}  style='width: 250px; height: 195px;' alt=PINK;>
										</a>
										
										<center>
										<div class='caption'>
											<h3>{$arrr[$i][1]}</h3>
											<p>Price: Rs. {$arrr[$i][4]}</p>";
										 if(!isset($_SESSION['email'])){
											 echo "<a href=login.php role=button class='btn btn-primary btn-block'>Buy Now</a></p>";
										 }
										 else{
										echo "<a href=cart_add.php?add_to_cart=true&id={$arrr[$i][0]} class='btn btn-block btn-primary'  name=add value=add class='btn btn-block btr-primary'>Add to cart</a>";
										 }
										echo "</div>
										</center>
										</div></div>";
										
										
                                  $i++;
                                }

                                ?>
                                </tbody>
                                </table>
					</div>			
					</div>
		
   
		<?php elseif(isset($_GET['fresh_flowers'])): ?>	
			<div class="container">
			<div class="row">
										 <?php $sql1= "SELECT * FROM flowers WHERE category='fresh'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);

										?>
                                 <!--<h1>Orders</h1>-->
                                  <table class="table table-bordered">
                                  
                                <tbody> 
								
                                <?php
                                $i=0;
								
								
                                while($i<$no)
                                { 
                                 /* echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][3]}</td>
										<td><img style=width:20% src={$arrr[$i][3]}></td>
										<td>{$arrr[$i][4]}</td>
										<td>
										<a href=\"single={$arrr[$i][0]}\" class=\"btn btn-danger btn-sm\">Delete</a>
										</td>
                                        </tr>";*/
										
										echo" 
										
										<div class='col-md-3 col-sm-6'>
										<div class='thumbnail'>
										<a href=cart.php>
										
										<img src={$arrr[$i][3]}  style='width: 250px; height: 195px;' alt=PINK;>
										</a>
										
										<center>
										<div class='caption'>
											<h3>{$arrr[$i][1]}</h3>
											<p>Price: Rs. {$arrr[$i][4]}</p>";
										 if(!isset($_SESSION['email'])){
											 echo "<a href=login.php role=button class='btn btn-primary btn-block'>Buy Now</a></p>";
										 }
										 else{
										echo "<a href=cart_add.php?id={$arrr[$i][0]} class='btn btn-block btn-primary'  name=add value=add class='btn btn-block btr-primary'>Add to cart</a>";
										 }
										echo "</div>
										</center>
										</div></div>";
										
										
                                  $i++;
                                }

                                ?>
                                </tbody>
                                </table>
					</div>			
					</div>
		
		<?php elseif(isset($_GET['mix_flowers'])): ?>	
					<div class="container">
			<div class="row">
										 <?php $sql1= "SELECT * FROM flowers WHERE category='mix'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);

										?>
                                  <!--<h1>Orders</h1>-->
                                  <table class="table table-bordered">
                                  
                                <tbody> 
								
                                <?php
                                $i=0;
								
								
                                while($i<$no)
                                { 
                                 /* echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][3]}</td>
										<td><img style=width:20% src={$arrr[$i][3]}></td>
										<td>{$arrr[$i][4]}</td>
										<td>
										<a href=\"single={$arrr[$i][0]}\" class=\"btn btn-danger btn-sm\">Delete</a>
										</td>
                                        </tr>";*/
										
										echo" 
										
										<div class='col-md-3 col-sm-6'>
										<div class='thumbnail'>
										<a href=cart.php>
										
										<img src={$arrr[$i][3]}  style='width: 250px; height: 195px;' alt=PINK;>
										</a>
										
										<center>
										<div class='caption'>
											<h3>{$arrr[$i][1]}</h3>
											<p>Price: Rs. {$arrr[$i][4]}</p>";
										 if(!isset($_SESSION['email'])){
											 echo "<a href=login.php role=button class='btn btn-primary btn-block'>Buy Now</a></p>";
										 }
										 else{
										echo "<a href=cart_add.php?id={$arrr[$i][0]} class='btn btn-block btn-primary'  name=add value=add class='btn btn-block btr-primary'>Add to cart</a>";
										 }
										echo "</div>
										</center>
										</div></div>";
										
										
                                  $i++;
                                }

                                ?>
                                </tbody>
                                </table>
					</div>			
					</div>
		
		
		
		
		
		<?php elseif(isset($_GET['artificial_flowers'])): ?>
								<div class="container">
			<div class="row">
										 <?php $sql1= "SELECT * FROM flowers WHERE category='artificial'";
									$arr1=mysqli_query($con,$sql1);
									$arrr = mysqli_fetch_all($arr1);
							
								 // echo WWWWWWWWWW;
								  $no=0;
                                  $no=count($arrr);

										?>
                                  <!--<h1>Orders</h1>-->
                                  <table class="table table-bordered">
                                   
                                <tbody> 
								
                                <?php
                                $i=0;
								
								
                                while($i<$no)
                                { 
                                 /* echo "<tr>
                                        <td>{$arrr[$i][0]}</td>
                                        <td>{$arrr[$i][1]}</td>
                                        <td>{$arrr[$i][2]}</td>
                                        <td>{$arrr[$i][3]}</td>
										<td><img style=width:20% src={$arrr[$i][3]}></td>
										<td>{$arrr[$i][4]}</td>
										<td>
										<a href=\"single={$arrr[$i][0]}\" class=\"btn btn-danger btn-sm\">Delete</a>
										</td>
                                        </tr>";*/
										
										echo" 
										
										<div class='col-md-3 col-sm-6'>
										<div class='thumbnail'>
										<a href=cart.php>
										
										<img src={$arrr[$i][3]}  style='width: 250px; height: 195px;' alt=PINK;>
										</a>
										
										<center>
										<div class='caption'>
											<h3>{$arrr[$i][1]}</h3>
											<p>Price: Rs. {$arrr[$i][4]}</p>";
										 if(!isset($_SESSION['email'])){
											 echo "<a href=login.php role=button class='btn btn-primary btn-block'>Buy Now</a></p>";
										 }
										 else{
										echo "<a href=cart_add.php?id={$arrr[$i][0]} class='btn btn-block btn-primary'  name=add value=add class='btn btn-block btr-primary'>Add to cart</a>";
										 }
										echo "</div>
										</center>
										</div></div>";
										
										
                                  $i++;
                                }

                                ?>
                                </tbody>
                                </table>
					</div>			
					</div>
		
		
			<?php else: ?>
			
			<?php endif;?>
			<br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>DRAPIEZ COLOMBO</p>
                   <p>This website is developed by MIT SEUSL</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
