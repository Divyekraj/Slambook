
<?php
include'header.php';
$visi=$row['visibility'];
$notifi=(explode(",",$row['notification']));

$mprivacy=$row['messagePrivacy'];
$deprivacy=$row['detailsPrivacy'];


?>
<div class="setting">
    <form action="" method="post">
    <h2>Setting</h2>
    <hr>
    <div class="head">
        General Setting
    </div>
    <ul>
        <li class="slist">Slambook Visibility :    <select name="visibility"><option <?php if($visi=='College level')echo "selected"?>>College level</option><option <?php if($visi=='Public')echo "selected"?>>Public</option></select></li>
        <li class="slist">Notification   :<br>    
            <input type="checkbox" name="noti[]" value="Message" <?php if (in_array("Message", $notifi)) echo "checked"; else echo "uncheck"; ?> >&nbsp;Message&nbsp;<br>
            <input type="checkbox" name="noti[]" value="Photo" <?php if (in_array("Photo", $notifi)) echo "checked"; else echo "uncheck";?>>&nbsp;Photo Upload&nbsp;<br>
            <input type="checkbox" name="noti[]" value="NewEntry" <?php if (in_array("NewEntry", $notifi)) echo "checked"; else echo "uncheck"; ?>>&nbsp;New SlamBook Entry&nbsp;<br>
            <input type="checkbox" name="noti[]" value="NewEvent" <?php if (in_array("NewEvent", $notifi)) echo "checked"; else echo "uncheck";?>>&nbsp;New Event&nbsp;<br>
            
        </li>
    </ul>
    <div class="head">
        Privacy
    </div>
    <ul>
        <li class="slist">Who can send you Message? :    <select name="MsgPrivacy"><option <?php if($mprivacy=='Anyone')echo "selected"?>>Anyone</option><option <?php if($mprivacy=='College Friends only')echo "selected"?>>College Friends only</option></select></li>
        <li class="slist">Share your details with :    <select name="DetailsPrivacy"><option <?php if($deprivacy=='Everyone')echo "selected"?>>Everyone</option><option <?php if($deprivacy=='College Friends only')echo "selected"?>>College Friends only</option></select></li>
    </ul>
    <div class="send-button agileits w3layouts">
	<input type="submit" class="btn btn-primary" value="Save" name="save">
        <input type="reset" class="btn btn-success" value="Reset">
        <input type="button" class="btn btn-danger" value="Cancel" onclick="window.location='index2.php'">
    </div>
</form>
</div>
<?php
include'footer.php';
if(isset($_POST['save']))
{
    $visibility=$_POST['visibility'];
    $noti=implode(',', $_POST['noti']);
    $msgprivacy=$_POST['MsgPrivacy'];
    $dprivacy=$_POST['DetailsPrivacy'];
    $q="update users set visibility='$visibility',notification='$noti',messagePrivacy='$msgprivacy',detailsPrivacy='$dprivacy' where Id=14;";
    $result=mysqli_query($conn,$q);
    if($result)
    {
        echo "<script>alert('Setting Saved  !');</script>";
        echo "<script>window.location='index2.php';</script>";
    }
    else{
        echo "<script>alert('Setting is not Saved  !');</script>";
    echo "<script>window.location='index2.php';</script>"; }
}
?>