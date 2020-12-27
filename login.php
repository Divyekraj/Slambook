<?php include('session.php');

?>
<?php

	$error = false;
	$error_msg =""; $success_msg="";
	
	$email_error=""; $password_error="";
	// if some page not opened, read error msg of that page
	isset($_GET['error_msg']) ? $error_msg = $_GET['error_msg'] : $error_msg="";
	
	
	if($_POST)
	{
        
		// read received values
		
		// read form values
		$email = $_POST['mail'];
		$password = $_POST['pwd'];		
		echo "<script>alert('".$password."');</script>";
		// validation
		if($email=="") $email_error="Email is required.";	
	
        
        include 'DatabaseConnection.php';	
        
       
		// validation for unique email
		$email_query = mysqli_query($conn, "select * from users where mail LIKE '$email' ");
		$email_count = mysqli_num_rows($email_query);
		if($email_count == 0) $email_error = "Email not available.";
		// email validation end
	
		// match password from query
		$user_data = mysqli_fetch_array($email_query);

        if($password != $user_data["password"])
             $password_error = "Wrong password.";		
		//var_dump($user_data); die();
		
        if($email_count != 1 || $password_error!="")
        {

            $error = true;	
            	
        }
		
		if(!$error)
		{
            echo"<script>alert('I am Here')</script>";

			$_SESSION['login'] = true;
			 
            $_SESSION['user_data'] = $user_data;
            
            $_SESSION['ID']=$email;
            	
			
			//var_dump($_SESSION); die();
			//redirect
			header("Location:index2.php");
		}
		//else echo "no if";
	}		
?>




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Slambook 2020(Digital Slambook), Here you will get memories and lost friends.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="slambook2020,slambook,digital slambook,online slambook,d.y.patil college akurdi,mca and management akurdi,design by mca department,developed by dy patil students, vishal surgade,ganesh kadam,hitesh zambhare">
   


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
   <script>
           function check(id)
           {
               if(id===1)
               {
                   document.getElementById("sign-up").style.display="block";
                   document.getElementById("login").style.display="none";
                   document.getElementById("profile").style.display="none";
                   
               }
               else if(id===2){
                   document.getElementById("sign-up").style.display="none";
                   document.getElementById("login").style.display="block";
                   document.getElementById("profile").style.display="none";
               }
               else
               {
                   document.getElementById("sign-up").style.display="none";
                   document.getElementById("login").style.display="none";
                   document.getElementById("profile").style.display="block";
               }
           }
            function callingfile(){
               document.getElementById('file').click();
           }
       </script>
</head>
<body class="bg-dark">

<div id="full-body">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
               
                <div class="login-form" id="login"><br><br>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="mail">
                            <span style="color:red;"><?php echo $email_error;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="pwd">
                            <span style="color:red;"><?php echo $password_error;?></span>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>&nbsp;
                      <a href="index.php" style="color:white;">  <button type="button" class="btn btn-success btn-flat m-b-30 m-t-30">Cancel</button></a>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social google btn-flat btn-addon mt-3"><i class="ti-google"></i>Sign in with google</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#" onclick="check(1)"> Sign Up Here</a></p>
                        </div>
                    </form><br>
                </div>
            </div><!-- login form -->
            <!-- sign up form -->
            <form action="add-user.php" method="post" enctype="multipart/form-data">
            <div class="login-content" id="sign-up" style="display:none;">
               
                <div class="login-form">
                    
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="Text" class="form-control" placeholder="First Name" required name="fname">
                            <label>Last Name</label>
                            <input type="Text" class="form-control" placeholder="Last Name" required name="lname">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" required name="mail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>&nbsp;&nbsp;<span style="color:green;background-color:white;border-radius:10px;padding:5px;">Encrypted by 32 bits</span>
                            <input type="password" class="form-control" placeholder="Password" required>
                            
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>&nbsp;&nbsp;<span style="color:green;background-color:white;border-radius:10px;padding:5px;">Encrypted by 32 bits</span>
                            <input type="password" class="form-control" placeholder="Confirm Password" required name="pwd">
                        </div>
                        
                        <button type="button" class="btn btn-success btn-flat m-b-15 m-t-15" onclick="check(3)">Next</button>&nbsp;
                        <a href="index.php" style="color:white;"><button type="button" class="btn btn-success btn-flat m-b-15 m-t-15" >Cancel</button></a>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social google btn-flat btn-addon mt-3"><i class="ti-google"></i>Sign in with google</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="#" onclick="check(2)">Login</a></p>
                        </div>
                        </div>
            </div>
                        <div class="login-content" id="profile" style="display:none;position:relative;left:7%;width:300px;height:500px;">
                            <br><br><br><br><br><br>
                         <div class="form-group" >
                            
                           <img src="images/user.png" id="poster" width="150px" height="180px" style="border:2px solid black;border-radius:50px;" ><br><br>
                     <input type="button" value="Choose Profile" onclick="callingfile()" style="background-color:skyblue;width:150px;height:50px;border-radius:10px;">
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
                               <div class="form-group" style="margin-top:20px;">
                              <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Skip</button>
                             <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign up</button>
                               </div>
                        </div>
                           
                        </div>
                <br><br><br><br><br><br>
                    </form>
                
        </div>
    </div>

</div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>

