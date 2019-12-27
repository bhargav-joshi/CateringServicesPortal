
<link rel="stylesheet" type="text/css" href="index.css"/>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<body onLoad="doOnLoad();">
<div id="header">
	<span class="style2">
		<a href="">
		<span class="style4">
			
		</span></a>
	</span>
  <div id="header">
     
	<ul>
    <li><a href="login.php">Admin</a></li>
      <li><a href="Gallary.html">Gallary</a></li>
    <li><a href="Menu.php">Menu</a></li>
      <li><a href="book.php">Book Now</a></li>
      <li><a href="index.html">Home</a></li>

    
      
     
    </ul>
  </div>
<?php

require("include/connection.php");

if(isset($_POST['login']) && !empty($_POST['login'])){
		
		$id=$_POST['id'];
		$pass=$_POST['pass'];
		
		
			$query="SELECT `admin_id` ,`password` FROM `user` WHERE `admin_id`='".$id."' AND `password`='".$pass."'";
			
			if($query_run=mysql_query($query)){
		
				if(mysql_num_rows($query_run)==NULL){
					echo '<script>
					alert("User name or password did not matched");
					</script>';
				}else{
					//echo "<br>login successful";
					while($row=mysql_fetch_assoc($query_run)){
						$id=$row['id'];
						}
					
					session_start();					
					$_SESSION['id']="$id";
	
					
					$ad="admin.php";
					header('Location:'.$ad);
				
				}
			}else{
				echo mysql_error();
			}
		}
	

?>

<!DOCTYPE>
<html>
	
	<head>
		<title>Absolute Solutions</title>
		<link rel="stylesheet" type="text/css" href="About Us.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">


			<style>

					.lg{
						width:50%;
					  height:500px;
					
					  margin:30px auto;
					  width:500px;
					background-color: lightgrey;
					  border:1px solid;
					 border-radius:10px;
					  text-align:center;
					   font: italic bold 12px/30px Georgia, serif;
					  
					}
					input[type=text] {
					  width: 50%;
					  margin-bottom: 20px;
					  padding: 12px;
					  border: 1px solid #ccc;
					  border-radius: 3px;
					}
					input[type=password] {
					  width: 50%;
					  margin-bottom: 20px;
					  padding: 12px;
					  border: 1px solid #ccc;
					  border-radius: 3px;
					}

				  		.btn {
					  background-color: red;
					  color: white;
					  padding: 12px;
					  margin: 10px 0;
					  border: none;
					  width: auto;
					  border-radius: 3px;
					  cursor: pointer;
					  font-size: 17px;
					}

					.btn:hover {
					  background-color: #45a049;
					}


					label{

						font-size: 16px;
						text-decoration-color: red;
					}
					img {
  border-radius: 50%;
}
		</style>
	</head>

		<div class="lg">
				<form action="login.php" method="POST">
					<img src="images\admin.png" alt="Call us" width="100" height=100"/></a>
					<h1> Administrator Login</h1><hr><br>
			
				<label>Username:</label><br>
				<input type="text" name="id" required><br>
				
				<label>Password:</label><br>
				<input type="password" name="pass" required> <br>
				
				<input type="submit" class="btn" name="login" value="Login">
				<input type="reset" class="btn" name="cancel" value="Cancel" >
				<p></p><a href="index.html"><b style="font-size: 20px;">Back to Home</b> </a>

			</form>
		</div>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="footer.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Absolute Solutions</span></h3>

				<p class="footer-links">
					<a href="index.html">Home</a>
					&nbsp
					<a href="feedback.php">Feedback</a>
					&nbsp
					<a href="about us.html">About Us</a>
					&nbsp

				<p class="footer-company-name">Absolute Solutions &copy; 2019</p> &nbsp
				
				<p style="font-family:Trebuchet MS;color:yellow;">
				All Rights Reserved. Created By 
				<a href="https://91projects.blogspot.com/">91Projects.com</a></p>
										&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
										&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
										&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

				<a href="https://91projects.blogspot.com/"><img src="logo.jpg" width="82" height="86" title="91Projects.com" alt=""></a>
				
			


			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>1st floor, Vishnu Prasad, </span>
						<span>Near Kamala Nehru Park,</span>
      					<span>Off. Bhandarkar Rd. Erandawan</span> Pune, Maharastra,India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9423507991</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:pune.absolutesolutions@gmail.com">pune.absolutesolutions@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Absolute solutions is a catering service provider company who provides best service for your function. :)
				</p>

				<div class="footer-icons">

					<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 0px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>
<body>
<!-- Add font awesome icons -->
<center><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>


				</div>

			</div>

		</footer>
	</body>

</html>