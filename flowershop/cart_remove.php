<?php
    require 'connection.php';
    session_start();
	
	
	
	
	
	
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
    c or die(mysqli_error($con));
    
	
	
	
	
	$del_id=$_GET['del_id'];
			$sql1= "DELETE FROM cart WHERE id='$del_id'";
			$arr1=mysqli_query($con,$sql1);	
	
	
	
	header('location: cart.php');
?>