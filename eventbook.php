<?php

include 'DatabaseConnection.php';
session_start();
	$location= $_POST['Location'];
	$meetupreason= $_POST['Meet_up_reason'];
	$college= $_POST['College'];
	$eventdetail= $_POST['Message'];
	$date= $_POST['Date'];
	$date = date('Y-m-d', strtotime($date));
	//$eventfor= $_POST['eventfor'];
	$id=$_SESSION['ID'];
        $q="select *from users where mail='$id';";
        $result=mysqli_query($conn,$q);
        $row=mysqli_fetch_assoc($result);
        $fname=$row['fname'];
        $lname=$row['lname'];
        $name=$fname." ".$lname;
        
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO eventbook VALUES('','$name','$location','$meetupreason','$college','$date','$eventdetail')";//,'$eventfor')";
	
	if ($conn->query($sql) === TRUE)
	{
		echo "<script>alert('Your Event is booked successfully')</script>";
		echo "<script>window.location='index2.php';</script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	} 
	
?>