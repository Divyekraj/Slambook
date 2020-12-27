
<?php
include 'session.php';
include 'DatabaseConnection.php';
if (!isset($_SESSION['ID'])) {
    echo "<script>alert('Please login to continue');window.location='login.php'</script>";
}
$id = $_SESSION['ID'];
$q = "select *from users where mail='$id';";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($result);
$id2=$row['Id'];
$fname = $row['fname'];
$lname = $row['lname'];
$profile = $row['profile'];

$query="select *from users2 where Id='$id2';";
$rs=mysqli_query($conn,$query);
$r=mysqli_fetch_assoc($rs);

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Slambook 2020(Digital Slambook), Here you will get Some memories and get lost friends.</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="slambook2020,slambook,digital slambook,online slambook,d.y.patil college akurdi,mca and management akurdi,design by mca department,developed by dy patil students, vishal surgade,ganesh kadam,hitesh zambhare">

<!-- Custom-Stylesheet-Links -->
<!-- Insex-Page.CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->


        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
            <link rel="stylesheet" type="text/css" href="css/book.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">
        <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
         <link rel="stylesheet" href="/path/to/src/flowchat.css" />
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/src/flowchat.js"></script>
    <link rel="stylesheet" href="slamchatcss.css">

	<!-- search -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- JQURY PLUGIN -->
    
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/src/flowchat.js"></script>

    <!--END-->

    <!--link -->
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
<style>
    .msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(0,0,0,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(0,0,0,0.5);
		font-size: 10px;
    }
    
     
  .card-head{
    background-color: #fff;
    border: 2px solid green;
  }
</style>

<script type="text/javascript">
    
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
    <!--END-->
		<style type="text/css">
       
       .search-box{
        width: 100%; 
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        color: black;
        background-color:white;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        color: black;
    }
    .result p:hover{
        background: #f2f2f2;
    }
   </style>


    <!--link -->
   


    </head>
    <body>


        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel" >
            <nav class="navbar navbar-expand-sm navbar-default"style="background-attachment:fixed;" >

                <div class="navbar-header" style="background-attachment:fixed">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation"  >
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="index2.php"><h3>SlamBook-2020</h3></a>
                    <a class="navbar-brand hidden" href="index2.php"><h3>S</h3></a>
                </div>
                <br>
                <div id="main-menu" class="main-menu collapse navbar-collapse" style="background-attachment:fixed;">



                    <div class="col-lg-12 col-md-8" >
                        <div class="card" >
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="profiles/<?php echo $profile; ?>" alt="Profile">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo "$fname $lname"; ?></h5>
                                    <div class="location text-sm-center"><?php echo $r['Bio'];?></div>
                                </div>
                                <hr>
                                
                                <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="setting.php"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php" ><i class="fa fa-power -off"></i>Logout</a>
                            
                            </div>
                        </div>
                    </div>


                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <!--<a id="menuToggle" class="menutoggle pull-left" onclick="hideshow()"><i class="fa fa fa-tasks" ></i></a>-->
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                 <div class="search-box">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                     <div class="result "></div>
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">50</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="message"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary">50</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-3" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="profiles/<?php echo $profile; ?>" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="setting.php"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php" ><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </header><!-- /header -->
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active"><a href="index2.php">Dashboard</a></li>
                                <li class="active"><a href="#">Check Slambook</a></li>
                                <li class="active"><a href="gallery.php">Gallery</a></li>
                                <li class="active"><a href="eventform.php">Events</a></li>
                                <li class="active"><a href="#">Messages</a></li>
                            </ol>
                        </div>
                    </div>
                   
                </div>
                