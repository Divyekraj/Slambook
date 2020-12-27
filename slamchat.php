<?php include 'header.php';
$n=$auth['Id'];
 ?>
    <div class="container-fluid">
    
    <!-- header  -->
    <!-- end header  -->
    <div class="">
    <div class="row">

        <div class="col-sm-3 h-100 ">
            <div class="card border">
                <div class="card-header  " >
                   <b>Friends</b>
                    
                </div>
                <div class="card-body contacts_body" style="height: 350px; overflow: hidden;border-top: 5px solid green;">
                    <ul class="list-group">

                  <?php 
                //  $rid=$_SESSION["rid"];
                        $con = mysqli_connect('localhost','root','','slambook-2020');
                        if (!$con) {
                            die('Could not connect: ' . mysqli_error($con));
                        }
                        //echo $q;
                        $query ="SELECT * FROM users";
                        $result = mysqli_query($con,$query);
                        if ($result->num_rows > 0) {
                        ?>
                        
                            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              $t=$row["Id"];
                              if($t==$n)
                              {
                                continue;
                              }
                              else{
                              ?>
                                <button type="button" class="btn btn-success rounded mt-2"  style="height:55px" onclick="loadMsg(<?php echo $t;?>)">
                                    <li class="" style="list-style-type: none;">
                                        <div class="d-flex">
                                            <img src="profiles/<?php echo $row['profile']; ?>" class="rounded-circle user_img m-1" style="max-height:40px;max-width:40px;">
                                            
                                            <div class="user_info">
                                                <span><?php echo ucfirst($row['fname']); echo " "; echo ucfirst($row['lname']); ?></span>
                                                <!-- <p> <?php echo ucfirst($row["fname"]) ;?> is online</p> -->
                                            </div>
                                        </div>
                                    </li>
                                </button>
                        <?php
                                      }
                         }
                        }
                        ?>

                        
                        
						
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6 h-100 ">
            <div class="card  border">
                <div class="card-header " id="getUserName">
                
                    SlamChat
                
                </div>


                <div class="card-body overflow-auto" id="msgBody" style="height: 350px; overflow: hidden;border-top: 5px solid green;border-bottom: 5px solid green;">
                        Start Texting Your Friend
                  </div>


                <div class="card-footer" >
                    <div class="input-group mb-3">
                        <input type="text" id="msg" class="form-control">
                        <div class="input-group-append">
                            <button class="input-group-text" id="sendMsg" onclick="sendMsg()" type="submit">
                            <svg class="bi bi-cursor-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 01.103.557L8.528 15.467a.5.5 0 01-.917-.007L5.57 10.694.803 8.652a.5.5 0 01-.006-.916l12.728-5.657a.5.5 0 01.556.103z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                     </div>   
                </div> 
            </div>
        </div>

        <div class="col-sm-3 h-100">
            <div class="card card-head border">
                <div class="card-header" > 
                
                    Up-Coming Events
                    
                </div>
                <div class="card-body" style="height: 350px; overflow: hidden ;border-top: 5px solid green;">
                <?php
                  //  $con = mysqli_connect('localhost','root','','slambook-2020');
                    if (!$con) {
                        die('Could not connect: ' . mysqli_error($con));
                    }
                    //echo $q;
                    $query1 ="SELECT eventdetail FROM eventbook Order By date DESC limit 5";
                    $result1 = mysqli_query($con,$query1);
                    if ($result1->num_rows > 0) {
                ?>
                    <ul class="list-group" >
                        <?php while($row1 = mysqli_fetch_array($result1))  
                        {  
                            echo '<a href="#" alt="Go to event" style="color:black; text-transform: capitalize; "><li class="list-group-item rounded m-1"style="background-color: #69db78; border:2px solid #fff">';
                               echo $row1["eventdetail"];
                            echo '</li> </a>';
                        
                        }
                        ?>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
             </div>
         </div>
        </div>
   </div>
                
   </div>
<script>
var input = document.getElementById("message");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("sendMsg").click();
  }
});


var rid=document.getElementById("rid").value;
setInterval(function(){loadMsg(rid);}, 1000);


var objDiv = document.getElementById("msgBody");
objDiv.scrollTop = objDiv.scrollHeight;

function sendMsg() {
                var id=document.getElementById("rid").value;
               //alert(id);
                if (id == "") {
                        alert("I Dont Get ID");
                        return;
                } else {
                        if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                        
                        } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert(this.responseText);
                                //document.getElementById("alert").innerHTML = this.responseText;
                                document.getElementById("msg").value="";
                                alert("called");
                                //window.location.reload(true);
                                //alert("verified");
                        }
                        };
                        var x = document.getElementById("msg").value;
                        alert("msg:"+document.getElementById("msg").value);
                        if(x==" ")
                        {
                            alert("Type Something..");
                        }
                        else{
                            alert("message :"+x);
                            xmlhttp.open("GET","sendMsg.php?q="+id+"&msg="+x,true);
                             xmlhttp.send();
                        }
                        loadMsg(id);
                       
                }
   }
   
function loadMsg(id) {
    
                  //  alert("called")   //alert(id);
                if (id == "") {
                        alert("I Dont Get User ID");
                        return;
                } else {
                        if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                        
                        } else {
                        xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                                //alert(this.responseText);
                                document.getElementById("msgBody").innerHTML= this.responseText;
                                var objDiv = document.getElementById("msgBody");
                                objDiv.scrollTop = objDiv.scrollHeight;
                                //alert("called");
                                //window.location.reload(true);
                                //alert("verified");
                        }
                        };
                        xmlhttp.open("GET","getChat.php?q="+id,true);
                        xmlhttp.send();
                        setTimeout("loadMsg(id)", 100);
                        getUser(id);

                       
                }
   }
   
   
function getUser(id) {
    
    //alert("called")   //alert(id);
if (id == "") {
        alert("I Dont Get ID");
        return;
} else {
        if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
        
        } else {
        xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
                document.getElementById("getUserName").innerHTML= this.responseText;
                var objDiv = document.getElementById("getUserName");
                objDiv.scrollTop = objDiv.scrollHeight;
                //alert("called");
                //window.location.reload(true);
                //alert("verified");
        }
        };
        xmlhttp.open("GET","getUser.php?q="+id,true);
        xmlhttp.send();
    }
}
 
</script>
<?php include 'footer.php'; ?>