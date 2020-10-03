<?php
session_start();
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h2>DRAPIEZ COLOMBO</h2>
					    	<h4>No 25, Albert Perera Mawatha,Nugegoda, Colombo Nugegoda</h4>
							<h4>0773897997</h4>
							<h3>facebook.com/DrapiezColomboSrilanka</h3>
                     

					 <p>About The Business: A professional company who does floral decor, wall and ceiling drapes , special lightings , many more with our personalize and proffesional service . </p>
					   
					   
					   
                       <a href="products.php?all_flowers=true" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="">
                                <img src="test images/6.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fresh Flowers</p>
                                       <!-- <p>Choose among the best available in the world.</p>-->
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="">
                               <img src="test images/5.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Artificial Flowers</p>
                                   <!-- <p>Choose among the best available in the world.</p>-->
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="">
                               <img src="test images/4.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mix Flowers</p>
                                  <!-- <p>Choose among the best available in the world.</p>-->
                               </div>
                           </center>
                       </div>
                   </div>
				   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="">
                               <img src="test images/3.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mix Flowers</p>
                                   <!-- <p>Choose among the best available in the world.</p>-->
                               </div>
                           </center>
                       </div>
                   </div>
				   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="">
                               <img src="test images/2.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mix Flowers</p>
                                   <!-- <p>Choose among the best available in the world.</p>-->
                               </div>
                           </center>
                       </div>
                   </div>
				   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="">
                               <img src="test images/1.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mix Flowers</p>
                                   <!-- <p>Choose among the best available in the world.</p>-->
                               </div>
                           </center>
                       </div>
                   </div>
				   
               </div>
           </div>
		   
		   
            <br><br> <br><br><br><br>
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