<?php
date_default_timezone_set('Asia/Karachi');
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
    $greeting = "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    $greeting = "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    $greeting = "Good Evening";
}

//$user = $_SESSION['user'];
// $user=$_GET['user'];
 $user=$_SESSION['user'];
?>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

  </head>  
<nav class="navbar navbar-inverse navabar-fixed-left">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">DRAPIEZ COLOMBO</a>
                 
				   <a href="" class="navbar-brand">Manager Panel</a>
				   </div>
                   
                 
				   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           //if(isset($_SESSION['email'])){
                           ?>
             
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
						   
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
							<li>
							
							<a class="list-group-item list-group-item-danger active" >
								<?php echo "<h3>Hello" . ' ' .$user."</h3>"; ?>
							</a>
							</li>
                       </ul
					   	
                   </div>
               </div>
</nav>

<!--VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV-->
 <nav class="navbar navbar-inverse navabar-fixed-left">
               <div class="container">
                 
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-left">
						
                        <?php echo	"<li><a href='manager_action.php?orders=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Customers orders</a></li>";?>
                        <?php echo	"<li><a href='manager_action.php?confirmed=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Confirmed orders</a></li>";?>
						<?php echo	" <li><a href='manager_action.php?sales=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Sales</a></li>";?>
						
                           <?php
                           //}
                           ?>
                           
                       </ul>
                   </div>
				   
               </div>
</nav>   
	
	
	
	
	
        <!-- /#sidebar-wrapper -->
