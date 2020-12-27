
    <!-- JQURY PLUGIN -->
    <link rel="stylesheet" href="/path/to/src/flowchat.css" />
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/src/flowchat.js"></script>

    <!--END-->

    <!--link -->
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slamchatcss.css">

    
<style>
    a:hover img {
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    
}
.tab {
  overflow: hidden;
  /* border: 1px solid #ccc; */
  /* background-color: #f1f1f1; */
  width:100%;
}
 .bg
    {
      background-color:#00004d;
      border: 1px solid white;
      width: 50%;
      color: white;
      text-align: center;
      height: 40px;
      line-height: 40px;

    }
    .bg:hover{
      color: white;
    
    }
    .imgr{
        width:280px;
        height:250px;
        border:2px gray solid;
        border-radius:20px;
        box-shadow:2px 2px darkolivegreen;
        padding:10px;
      margin:10px;
    }
    #ban{
        width:90%;
        height:120%;
        position:absolute;
        overflow-y:scroll;
    }
  
    
</style>

<?php include 'header.php'; 

?>
<div class="tab">
 <ul class="nav nav-pills nav-justified">
     <a href="#two" id="two" class="bg"><li>Gallery
    </li></a>
    <a href="#one" id="one" class="bg"><li>Upload
    </li></a>
    
   
  </ul>
</div>

<br>


<div id="div2">
  <h3><b>Gallery:</b><h3>
  <hr>
<br>
  <div id="ban">
        <?php
        // fetch Images
        //$i = 1;
        include "DatabaseConnection.php";
        $queryGetImg = "SELECT * FROM multiple_images ORDER BY id DESC ";
        $resultImg = $conn->query($queryGetImg);
        if ($resultImg->num_rows > 0 ){
            while ($row = $resultImg->fetch_object()){ ?>
              <!-- <ul class="gallery_box"> -->
              <!-- <li> -->
                  <a href="#0"><img src="<?php echo 'uploads/'.$row->imgName;?>" class="imgr"/>
                  </a>
              <!-- </li>  -->
            <!-- </ul> -->


                
           <?php
            }
        }
        ?>
      </div>
</div>

<div id="div1">

<h3>Multiple Photo:</h3>
<hr>
<form  action="upload-script.php" method="post" enctype="multipart/form-data">
 <input type="file"  accept="image/*" name="imageFile[]" required multiple class="form-control">
  <br>
<input type="submit" name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success">
</form>
<hr>
<h3>Group Photo:</h3>
<hr>
<form  action="upload-script.php" method="post" enctype="multipart/form-data">
 <input type="file" name="imageFile[]" accept="image/*" required  class="form-control">
 <br>
 <input type="Text" class="form-control" placeholder="Write something about this picture." name="description" required>
  <br>
<input type="submit" name="groupImageBtn" id="groupImageBtn" value="Upload Images" class="btn btn-success">
</form>
</div>

<script>
  $("#div1").hide();
$(document).ready(function(){
  $("#one").click(function(){
    $("#div2").hide();
    $("#div1").show();
  });
  $("#two").click(function(){
    $("#div1").hide();
    $("#div2").show();
  });
});
</script>
<?php include 'footer.php'; ?>