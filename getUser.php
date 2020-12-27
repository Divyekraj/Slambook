<?php include('session.php');
                $n=$auth['Id'];
                $rid= $_GET['q']; 
                ?>
                <input type="hidden" id="rid" value="<?php echo $rid;?>">
                <?php
                if($n==$rid){
                    echo "id is same in get chat";
                }
                $con = mysqli_connect('localhost','root','','slambook-2020');
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }

                $query1 ="SELECT * FROM users where Id=$rid";
                 $result1 = mysqli_query($con,$query1);
                 $row1 = mysqli_fetch_array($result1);
                 echo $row1["fname"] ;
                ?>