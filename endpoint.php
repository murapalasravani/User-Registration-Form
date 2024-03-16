<!DOCTYPE html>
<html>
<head>
	<title>Fetch data from database</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h2 class="display-6 text-center">User Data</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<tr>
								<td>ID</td>
								<td>Name</td>
								<td>Email</td>
								<td>Age</td>
								<td>DOB</td>
							</tr>
							<tr>
								<?php
									$con=new mysqli("localhost","root","","user details");
  									if($con->connect_error){
										die('Connection Failed : '.$con->connect_error);
									} 
									$query= "select * from registration";
									$result=mysqli_query($con,$query);
								
									while($row=mysqli_fetch_assoc($result))
									{
								?>
								<td><?php echo $row['ID']; ?></td>
								<td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td><?php echo $row['Age']; ?></td>
								<td><?php echo $row['DOB']; ?></td>

							</tr>
							<?php

									}
									
								?>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
