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
						<?php echo	"<li><a href='admin_action.php?overview=true&user=$user' ><span class='glyphicon glyphicon-blackboard'></span> Overview</a></li>";?>
                        <?php echo	"<li><a href='admin_action.php?orders=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Customers orders</a></li>";?>
                        <?php echo	"<li><a href='admin_action.php?confirmed=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Confirmed orders</a></li>";?>
						<?php echo	" <li><a href='admin_action.php?sales=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Sales</a></li>";?>
						<?php echo	"<li><a href='admin_action.php?products=true&user=$user'><span class='glyphicon glyphicon-blackboard'></span> Products</a></li>";?>
                           <?php
                           //}
                           ?>
                           
                       </ul>
                   </div>
				   
               </div>
</nav>   
	
	
	
	
	<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <div></div>
                    </a> 
                    <div id="logged-in-info">
                        <span> <?php //echo $greeting . ' ' . $user['fname']; ?>! <br> <small>You're logged as '<?php// echo $user['username']; ?>'</small><br><?php //echo $user['typename']; ?></span> <a class="btn btn-danger" href="do_logout.php" role="button">Logout</a>
                    </div>
                </li>
                <?php
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';
                
                    //if(in_array($user['typename'],['Administrator']))
                       // echo '<li><a href="employees.php">Employees</a></li>';
                
                 //   if(in_array($user['typename'],['Administrator','Doctor','Receptionist']))
                      //  echo '<li><a href="patients.php">Customers</a></li>';
                
                ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
