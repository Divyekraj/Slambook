<?php
include ("DatabaseConnection.php");
error_reporting(0);

if (isset($_POST['uploadImageBtn'])) {
    $uploadFolder = 'uploads/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        // save to database
        $query = "INSERT INTO multiple_images SET imgName='$imageName' " ;
        $run = $conn->query($query) or die("Error in saving image".$conn->error);
    }
    if ($result) {
        echo '<script>alert("Images uploaded successfully !")</script>';
        echo "<script>window.location='gallery.php';</script>";
      //  window.location.replace("gallery.php");
    }
    //header("Location:gallery.php"); 
}

if (isset($_POST['groupImageBtn'])) {
    session_start();
        // include 'DatabaseConnection.php';
        if (!isset($_SESSION['ID'])) {
            echo "<script>alert('Please login to continue');window.location='login.php'</script>";
        }
        $id = $_SESSION['ID'];
        $q = "select *from users where mail='$id';";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $add=$fname." ".$lname;
    include ("gallery.php");

    $description=$_POST['description'];
    $uploadFolder = 'groupimage/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        // save to database
        $query1 = "INSERT INTO group_image SET imgName='$imageName',description='$description',name='$add' " ;
         // $query2 = "INSERT INTO group_image SET description='$description' " ;
         $run1 = $conn->query($query1) or die("Error in saving image".$conn->error);
         // $run2 = $conn->query($query2) or die("Error in saving description".$conn->error);
    }
    if ($result) {
        echo '<script>alert("Images uploaded successfully !")</script>';
       echo "<script>window.location='gallery.php';</script>";
    }
}