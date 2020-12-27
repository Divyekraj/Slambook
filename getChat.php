<?php
                include('session.php');
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

                $q="select *from users where Id=$n";
                $q2="select *from users where Id=$rid";
                $result1=mysqli_query($con,$q);
                $result2=mysqli_query($con,$q2);
                $sender=mysqli_fetch_assoc($result1);
                $receiver=mysqli_fetch_assoc($result2);
                

                $query ="SELECT * FROM chat where (sender_userid=$n and reciever_userid=$rid) or (sender_userid=$rid and reciever_userid=$n) ORDER BY timestamp ASC ";
                
                        $result = mysqli_query($con,$query);
                                          
                        if ($result->num_rows > 0) {

                          while($row = mysqli_fetch_array($result))  
                          {  
                              $rid=$row["reciever_userid"];
                              if( ($row["sender_userid"] == $auth["Id"]))
                              {
                                  ?>
                                  <div class="d-flex justify-content-end mb-4" >
                                    <div class="msg_cotainer_send" style="max-width:200px">
                                    <?php echo htmlspecialchars($row["message"]); ?>
                                        <!-- <span class="msg_time_send"> <?php echo $row["timestamp"]; ?></span> -->
                                    </div>
                                        <div class="img_cont_msg">
                                        <img src="profiles/<?php echo $sender['profile']; ?>" class="rounded-circle user_img_msg">
                                    </div>
                                    </div>
                                  
                                  <?php
                               }
                               else
                               { ?>
                                    <div class="d-flex justify-content-start mb-4">
                              
                                        <div class="img_cont_msg">
                                            <img src="profiles/<?php echo $receiver['profile']; ?>" class="rounded-circle user_img_msg">
                                        </div>
                                        <div class="msg_cotainer" style="max-width:200px">
                                        <?php echo htmlspecialchars($row["message"]); ?>
                                            <!-- <span class="msg_time"><?php echo $row["timestamp"]; ?></span> -->
                                        </div>
                                    </div>

                               <?php
                               }
                           }
                        }
                        else{
                            echo '
                            <div class="d-flex justify-content-center ">
                            <h5>Say Hii To Your Friend</h5>
                            </div>';
                        }
                     ?>
                        

    