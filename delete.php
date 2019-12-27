<?php
		session_start();
		if(isset($_SESSION['id']))
		{	
			$admin=$_SESSION['id'];
		}else{
			//echo "PLEASE LOGIN";
			$pg='admin.php';
			header('location:'.$pg);
		
		
		}
		
		require "include/connection.php";
		
		
		if(isset($_GET['Sr_no'])){
			  echo $Sr_no=$_GET['Sr_no'];
			  
			  $sql="DELETE FROM `book_now` WHERE `Sr_no`=$Sr_no";
			  
			   if($result=mysql_query($sql)){
				  
				  
				  echo "<script>alert('delete sucessfully');</script>";
				  header('location:admin.php');
				  
				}else{
				  
				  echo mysql_error();
				  
				}
			  
			  
		}
			
?>			