<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Flip Book sin Librerias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .photo {
    /* margin: 30px; */
    position: relative;
    width: 180px;
    height: 130px;
    float: left;
}
.photo img {
    background: #fff;
    border: solid 1px #ccc;
    padding: 4px;
    /* height: 130px; */
}


    .sample1 span {
    width: 28px;
    height: 21px;
    display: block;
    position: absolute;
    top: -12px;
    left: 90px;
    margin-left: 40px;
    background: url(img/pin.png) no-repeat;
}



 .rounded-borders {
        height: 200px;
        width: 300px;
        border-color:#FAD7A0;
        border-image: none;
        border-radius: 50px 0 50px 0;
        border-style: solid;
        border-width: 20px;
      }

        </style>

    </head>
    <body>
        <div class="container" id="container">
            <div class="book-content">
                <div class="book">
                    <div class="face-front" id="portada"></div>
                    <div class="face-back" id="trsf">
                            <center>
                                <center><h4>Slambook</h4></center>
                                <div class="rounded-borders">
                                <!-- ?<div class="element"> -->
                                <div class="photo sample1">

                                <span></span><img src="img/9.jpg" alt="image" width="260px" height="160px"/>
                                </div>
                                <!-- </div> -->
                                </div>
                            </center>
                                        <hr>
                                        <b>Name:</b>
                                        <lable>Divyekraj Ramsing Sisodiya </lable><hr>                                 
                                        <b>DOB:</b>
                                        <lable>3-6-1996 </lable><hr>
                                 
                                       <b>Describe Your Most Memorable Experience in Collage:</b>
                                       <lable>XYZ </lable><hr>

                                       <b>Who Was Your Biggest Crush In Collage:</b>
                                        <lable>Hitesh </lable><hr>

                                        

                                        
                                    
                                
                    </div>
                </div>

                <div class="book">
                    <div class="face-front">
                        <b>Are You Happy With The Person You've Become:</b>
                                        <lable>XYZ </lable><hr>

                        <b>Do you Drunk Alcohole? if Yes,Then which:</b>
                    <lable>XYZ </lable><hr>

                    <b>Person You Hate Most in Collge:</b>
                    <lable>XYZ</lable><hr>

                    <b>Your Romantic Ideas/Expectation About Love:</b>
                    <lable>XYZ </lable><hr>

                    <b>Name The Person Who Always Annoyed You In College:</b>
                    <lable>XYZ </lable><hr>

                    <b>Do You Believe in Love?Why or Why not:</b>
                    <lable>XYZ </lable><hr>

                    <center><b>**Thank You**</b></center>


                    </div>
                   <!--  <div class="face-back">
                        <h1>Title 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laborum voluptatibus eaque repudiandae ullam necessitatibus, dolor ad expedita, eum praesentium vitae! Voluptate in itaque modi consequatur. Aliquid odit quisquam quibusdam!</p>
                    </div>
                </div>

                <div class="book">
                    <div class="face-front">
                        <h1>Title 4</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint perferendis nemo blanditiis impedit aut soluta quia illum deserunt, vero quod ducimus placeat voluptate quidem error sequi, earum eos minima in!</p>
                    </div>
                    <div class="face-back">
                        <h1>Title 5</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laborum voluptatibus eaque repudiandae ullam necessitatibus, dolor ad expedita, eum praesentium vitae! Voluptate in itaque modi consequatur. Aliquid odit quisquam quibusdam!</p>
                    </div>
                </div>

                <div class="book">
                    <div class="face-front">
                        <h1>Title 6</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint perferendis nemo blanditiis impedit aut soluta quia illum deserunt, vero quod ducimus placeat voluptate quidem error sequi, earum eos minima in!</p>
                    </div>
                    --> <div class="face-back" id="portada-back">
                    </div>
                </div>
            </div>
        </div>
        
        <script src="js/app.js"></script>
    </body>
</html>
