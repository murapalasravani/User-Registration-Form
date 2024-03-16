<?php 
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Age=$_POST['age'];
	$DOB=$_POST['dob'];
	$num=0;

	
	if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){echo "Invalid email format...";
		 $num=1;}
	if($Age<=0){echo "Enter positive integer for Age....";
		$num=1;}

	 //database connection
	$conn=new mysqli("localhost","root","","user details");
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{ 
		$stmt=$conn->prepare("insert into registration(Name,Email,Age,DOB) values(?,?,?,?)");
		$stmt->bind_param("ssis",$Name,$Email,$Age,$DOB);
		$stmt->execute();
		if($num==0){
		echo "Registration successfully completed....";}
		$stmt->close();
		$conn->close();
	}
 ?>
