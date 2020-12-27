<?php 
session_start();
include 'DatabaseConnection.php';
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];
$q="select *from users where mail='$mail' and password='$pwd';";
$result=mysqli_query($conn,$q);
$num_row=mysqli_num_rows($result);
if($num_row==1){ $_SESSION['ID']=$mail; echo "<script>window.location='index2.php';</script>"; }
else{  echo "<script>alert('Invalid user');window.location='login.php';</script>"; }
?>
