
<?php 
include 'DatabaseConnection.php';
$id=$_REQUEST['id'];
$bio=$_REQUEST['bio'];
$clg=$_REQUEST['clg'];
$mail=$_REQUEST['mail'];
$mobile=$_REQUEST['mob'];
$fb=$_REQUEST['fb'];
$tktk=$_REQUEST['tktk'];
$insta=$_REQUEST['insta'];
$other=$_REQUEST['other'];
$q="update users2 set Bio='$bio', Mobile='$mobile', College='$clg',Facebook='$fb',Instagram='$insta',TikTok='$tktk',Other='$other'  where Id=$id";
$result=mysqli_query($conn,$q);
if($result)
    echo "ProfileUpdated.";
else
    echo $q;
?>