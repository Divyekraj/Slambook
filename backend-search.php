<?php

include("DatabaseConnection.php");
 
if(isset($_REQUEST["term"])){
   
    $sql = "SELECT * FROM users WHERE fname LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
       
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        $param_term = $_REQUEST["term"] . '%';
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p style='background-color:#696969;color:white;border-bottom-left-radius:20px;border-bottom-right-radius:20px;'>" . $row["fname"] . "</p>";
                }
            } else{
                echo "<p style='background-color:#696969;color:white;border-bottom-left-radius:20px;border-bottom-right-radius:20px;'>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt);
}
 ?>
