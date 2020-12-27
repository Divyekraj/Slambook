
<?php 
    $conn=mysqli_connect("localhost","root","","slambook-2020");
    if($conn)
        echo "";
    else
        echo "<script>alert('DB not Connected');</script>";
?>