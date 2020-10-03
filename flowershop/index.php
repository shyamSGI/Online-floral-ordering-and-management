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
          <!-- <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We provide.</h1>
                       <p>All type of floral decorations services.</p>
                       <a href="products.php?all_flowers=true" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
		   -->
		   
		   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  
  
             <div class="container">
                   <center>
                   <div id="bannerContentxxx">
                       <h1 id="bannerText" >We provide.</h1>
                       <p id="bannerText">All type of floral decorations services.</p>
                       <a href="products.php?all_flowers=true" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
  
  
  
  
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/c1.jpg" alt="Los Angeles">
   

   </div>

    <div class="item">
      <img src="img/c2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/c3.jpg" alt="New York">
    </div>
  </div>
  
				
         

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		   
		   
		   
		   
		   
		   
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php?fresh_flowers=true">
                                <img src="img/fresh.jpg" alt="fresh">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fresh Flowers</p>
                                        <p>Fresh flower decorations.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php?mix_flowers=true">
                               <img src="img/artificial.jpg" alt="artificial">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Artificial Flowers</p>
                                    <p>Artificial flower decorations.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php?artificial_flowers=true">
                               <img src="img/mix.jpg" alt="mix">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Mix Flowers</p>
                                   <p>Mix flower decorations.</p>
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