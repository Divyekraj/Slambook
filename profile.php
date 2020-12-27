
<?php
include 'header.php';
include 'DatabaseConnection.php';


$q="select *from users2 where Id=$id2";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);
?>
<script>
function submitRecord(id) {

	var bio=document.getElementById('bio').textContent;
        var clg=document.getElementById('clg').textContent;
        var mail=document.getElementById('mail').textContent;
        var mobile=document.getElementById('mobile').textContent;
        var fb=document.getElementById('fb').textContent;
        var tktk=document.getElementById('tktk').textContent;
        var insta=document.getElementById('insta').textContent;
        var other=document.getElementById('other').textContent;
        
    if (bio.length == 0) {
        
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('up').innerHTML=this.responseText;
            }
        };
        xmlhttp.open("POST", "profile-update.php?bio=" + bio+"&clg="+clg+"&mail="+mail+"&mob="+mobile+"&id="+id+"&fb="+fb+"&tktk="+tktk+"&insta="+insta+"&other="+other, true);
        xmlhttp.send();
    }
}

</script>
<div class="profile-div">
    <h2 id="ppp">Profile</h2><sub><h4 id="up"></h4></sub>
    <hr>
    
    <div class="img">
        <img src="profiles/<?php echo $profile; ?>" id="poster"> 
        <input type="submit" value="Change Profile" onclick="document.getElementById('file').click()" style="background-color:skyblue;width:150px;height:40px;border-radius:100px;position:absolute;margin-left:-16%;margin-top:15%;">
            <input type="file" id="file" accept="image/*" style="display:none;" onchange="readURL(this)" name="profile">
            <script>
             function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#poster').attr('src', e.target.result);
                
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
       
       
        <h3><?php echo $fname; echo " "; echo $lname; ?></h3>
    </div>
    <div class="bio"><h4 style="display:inline;">Bio</h4><hr><p contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" id="bio"><?php echo $row['Bio']; ?></p></div>
    <div class="oevent"><h4 style="display:inline;">Organized events</h4><hr><p>No event</p></div>
    <div class="other">
    <span class="one">
        <h4 style="display:inline;">General</h4><hr>
        <b>College:</b><p id="clg" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $row['College'] ;?></p><br>
        <b>Mail:</b> <p id="mail" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $_SESSION['ID']; ?></p><br>
        <b>Mobile:</b><p id="mobile" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"> <?php echo $row['Mobile']; ?></p><br>
    </span>
        <span class="social">
            <h4 style="display:inline;">Social Links</h4><h6 style="display:inline;">Just copy and paste your social profile URL</h6><hr>
            <b>Facebook :</b> <a href="<?php echo $row['Facebook']; ?>" target="_blank"><p  id="fb" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $row['Facebook']; ?></p></a><br>
            <b>TikTok :</b><a href="<?php echo $row['TikTok']; ?>" target="_blank"> <p id="tktk" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $row['TikTok']; ?></p></a><br>
            <b>Instagram :</b> <a href="<?php echo $row['Instagram']; ?>" target="_blank"><p id="insta"contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $row['Instagram']; ?></p></a><br>
            <b>Other :</b> <a href="<?php echo $row['Other']; ?>" target="_blank"><p id="other" contenteditable="true" onblur="submitRecord(<?php echo $id2; ?>)" style="display:inline;"><?php echo $row['Other']; ?></p></a><br>
        </span>
    </div>
</div>
<?php
include 'footer.php';
?>