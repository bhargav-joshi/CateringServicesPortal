	<link rel="stylesheet" type="text/css" href="Book.css"/>


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
		<li><a href="index.html">Logout</a></li>
    <li><a href="login.php">Admin</a></li>
      <li><a href="Gallary.html">Gallary</a></li>
    <li><a href="Menu.php">Menu</a></li>
      <li><a href="book.php">Book Now</a></li>
      <li><a href="index.html">Home</a></li>

    
      
     
    </ul>
  </div>

  </div>

<?php

	require("include/connection.php");

?>

<style>

	.divbg{
		border:3px solid blue;
		background-color:lightblue;
		position:center;
		border-radius: 1%;
		text-align: center;
		float:center;
		text-align: center;
		width:1000px;
		padding: 0px;
		margin-left:200px;
		margin-top:20px;
		
	}
	.divbg1{
		border:3px solid blue;
		background-color:lightgrey;
		position:center;
		border-radius: 1%;
		float:center;
		text-align: center;
		width:1000px;
		margin-left:200px;
		margin-top: 0px;
		
	}

	table{

	}

	th,td{
		text-align:center;
		padding:5px;

		font-size: 20px;
	}

</style>
<div>
<div class="divbg1">
				<h2>Customer List</h2>
				<table border="1">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Gender</th>
						<th>Gmail</th>
						<th>Phone Code</th>
						
						<th>Phone No</th>
						<th>Requirements</th>
						<th>Delete</th>

					</tr>

					<?php
					require("include/connection.php");

							$sql="SELECT * FROM `book_now`";	
	$run_sql=mysql_query($sql);
	
	$num_rows=mysql_num_rows($run_sql);
						
							if($num_rows==null){
								echo "No Record Found ";
							}else{
								$Srno=1;
								while($row=mysql_fetch_assoc($run_sql)){
									$Sr_no=$row['Sr_no'];
									$name=$row['name'];
									$address=$row['address'];
									$gender=$row['gender'];
									$email=$row['email'];
									$ph_code=$row['ph_code'];
									$phone_no=$row['phone_no'];
								$Requirements=$row['Requirements'];

									

									echo "<tr>
										<td>$Srno</td>
										<td>$name</td>
										<td>$address</td>
										<td>$gender</td>
										<td>$email</td>
										<td>$ph_code</td>
										<td>$phone_no</td>
										<td>$Requirements</td>
										<td><a href='delete.php?Sr_no=$Sr_no'>Delete</a></td>

									</tr>";
									
									$Srno++;
								}
							}
						
						
						
						
						?>
												
						
						
					</table>


				</div>
</div>




<div>
	<div class="divbg">
		<h2>Feedback Data</h2>

<table border="1">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Gender</th>
						<th>Gmail</th>
						<th>Phone Code</th>
						
						<th>Phone No</th>
						<th>Feedback</th>
						<th>Delete</th>

					</tr>

					<?php
					require("include/connection.php");

							$sql1="SELECT * FROM `feedback`";	
	$run_sql1=mysql_query($sql1);
	
	$num_rows1=mysql_num_rows($run_sql1);
						
							if($num_rows1==null){
								echo "No Record Found ";
							}else{
								$Srno1=1;
								while($row=mysql_fetch_assoc($run_sql1)){
									$Sr_no1=$row['Sr_no'];
									$name1=$row['name'];
									$address1=$row['address'];
									$gender1=$row['gender'];
									$email1=$row['email'];
									$ph_code1=$row['ph_code'];
									$phone_no1=$row['phone_no'];
								$feedback1=$row['YourFeedback'];

									

									echo "<tr>
										<td>$Srno1</td>
										<td>$name1</td>
										<td>$address1</td>
										<td>$gender1</td>
										<td>$email1</td>
										<td>$ph_code1</td>
										<td>$phone_no1</td>
										<td>$feedback1</td>
										<td><a href='delete1.php?Sr_no=$Sr_no1'>Delete</a></td>

									</tr>";
									
									$Srno1++;
								}
							}
						
						
						
						
						?>
												
						
						
					</table>
</div>
</div>

