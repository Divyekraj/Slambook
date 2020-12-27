<?php

include 'DatabaseConnection.php';
$fname = ucfirst($_POST['fname']);
$lname = ucfirst($_POST['lname']);
$mail = $_POST['mail'];
$pwd = md5($_POST['pwd']);

$profile = $_FILES['profile']['name'];
$temp = $_FILES['profile']['tmp_name'];

if (!file_exists($_FILES['profile']['tmp_name']) || !is_uploaded_file($_FILES['profile']['tmp_name'])) {
    $profile = "user.png";
} else {
    if (move_uploaded_file($temp, "./profiles/" . $profile))
        echo "<script>alert('moved');</script>";
    else
        echo "<script>alert('not moved');</script>";
}
$q = "insert into users(Id,fname,lname,mail,password,profile,visibility,notification,messagePrivacy,detailsPrivacy) values('','$fname','$lname','$mail','$pwd','$profile','College level','Message,Photo,NewEntry,NewEvent','Anyone','Everyone');";
$result = mysqli_query($conn, $q);

if ($result) {
    $q2="select *from users where mail='$mail';";
    $result2=mysqli_query($conn,$q2);
    $row2=mysqli_fetch_assoc($result2);
    $id3=$row2['Id'];
    $q3="insert into users2 value('$id3','','','','','','','');";
    $resul3=mysqli_query($conn,$q3);
    mysqli_close($conn);
    echo "<script>alert('Login for continue ');</script>";
    header("Location:login.php");
} else {
    echo $q;
    echo mysqli_error($conn);
   
}
?>
