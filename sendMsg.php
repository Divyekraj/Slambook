
<?php include('session.php'); 
$n=$auth['Id'];
?>

<?php

$q = $_GET['q'];
$msg=$_GET['msg'];
if ($q==$n)
{
    echo "ID is Same";
}
//echo $msg;
$con = new mysqli('localhost','root','','slambook-2020');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
//echo $q;
mysqli_select_db($con,"slambook-2020");
$sql="insert into chat (sender_userid, reciever_userid,message,status) values ($n,$q,'$msg',0)";
if ($con->query($sql) === TRUE) {


   ;
} else {
    echo "erro";
   // echo "Error: " . $sql . "<br>" . $con->error;
}
mysqli_close($con);

?>