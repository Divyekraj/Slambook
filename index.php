<?php include 'DatabaseConnection.php'; ?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Slambook 2020(Digital Slambook), Here you will get Some memories and get lost friends.</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="slambook2020,slambook,digital slambook,online slambook,d.y.patil college akurdi,mca and management akurdi,design by mca department,developed by dy patil students, vishal surgade,ganesh kadam,hitesh zambhare">
<script type="application/x-javascript">  setTimeout(hideURLbar, 0); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->  <link rel="stylesheet" href="css/bootstrap.min.css" 		 type="text/css" media="all">
<!-- Insex-Page.CSS --> <link rel="stylesheet" href="css/style.css" 				 type="text/css" media="all">
<!-- Slider-CSS --> 	<link rel="stylesheet" href="css/camera.css" id="camera-css" type="text/css" media="all">
<!-- Portfolio-CSS -->	<link rel="stylesheet" href="css/swipebox.css"				 type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" type="text/css" media="all">
<!-- //Fonts -->
<style>
#main
{       
	padding:0px;
}
#agileaboutaitsabout

{
	padding: 50px;
}
</style>

<!-- Supportive-JavaScript -->
<script src="js/modernizr.js"></script>
<!-- //Supportive-JavaScript -->
<script>
	
</script>
</head>
<!-- //Head -->



<!-- Body -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



	<!-- Header -->
	<div class="agileheaderw3ls" id="agilehomewthree">

		<!-- Navigation -->
		<section class="cd-section">
			<a class="cd-bouncy-nav-trigger" href="#0">MENU</a>
		</section>
		<div class="cd-bouncy-nav-modal">
			<nav>
				<ul class="cd-bouncy-nav">
					<li><a class="scroll" href="#agilehomewthree">HOME</a></li>
                                        <li><a class="scroll" href="#skills">ADD IN SLAMBOOK</a></li>
					<li><a class="scroll" href="#w3threespecialityw3ls">CHECK SLAMBOOK</a></li>
                                        
					<li><a class="scroll" href="#portfolio">GALLERY</a></li>
                                        <li><a class="scroll" href="#event">EVENTS</a></li>
					<li><a class="scroll" href="#footer">CONTACT</a></li>
				</ul>
			</nav>
			<a href="#0" class="cd-close">Close modal</a>
                </div>
                <section class="cd-section3" style="right:50%;">
			<a class="cd-bouncy-nav-trigger1" href="#">Slambook-2020</a>
                        
		</section>
                <section class="cd-section2" >
			<a class="cd-bouncy-nav-trigger1" href="login.php">Sign In/Up</a>
                        
		</section>
		
		<!-- //Navigation -->

		<!-- Slider -->
		<div class="w3slideraits">
			<div class="camera_wrap w3layouts agileits camera_magenta_skin" id="camera_wrap_2">
				<div data-src="images/one.jpg" class="w3layouts agileits">
				
				</div>
				<div class="w3layouts agileits" data-src="images/slide-2.jpg">
					
				</div>
				<div data-src="images/two.jpg" class="w3layouts agileits">
					
				</div>
				<div class="w3layouts agileits" data-src="images/slide-4.jpg">
					
				</div>
				<div data-src="images/three.jpg" class="w3layouts agileits">
					
				</div>
			</div>
		</div>
		<!-- //Slider -->

	</div>
	<!-- //Header -->
       

        
	<!-- About -->
	 <div id="main">
              <?php 
            if($conn){
                $q="select *from group_image order by id desc";
                $result=mysqli_query($conn,$q);
                $count=0;
                while($row=mysqli_fetch_assoc($result))
                {  
                    if($count>2){ break; }
                    ?>
       
             <div class="agileaboutaitsabout" id="agileaboutaitsabout">
		<div class="agileaboutaits">
			<div class="container">
                                <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-image">
					
					<div class="agileaboutaits-image-1">
                                            <img src="groupimage/<?php echo $row['imgName']; ?>" alt="Couture">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-info">
					<h1>Description</h1>
                                        <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <?php echo $row['description']; ?>
                                            <br>
                                            <span style="float:right;margin-right:10px;"><b><i><?php echo $row['name']; ?></i></b></span>
                                        </p></div>

				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
        <hr>
         <?php 
                    $count++;
                }
            }
        ?>
         </div>


       <!-- //About -->



	<!-- Speciality -->
	
	<!-- //Speciality -->

	<!-- Progressive-Effects -->
	<div class="progressive-effects" id="skills">
		
        
	<!-- //Progressive-Effects -->



	<!-- Portfolio -->
	<div class="portfolio" id="portfolio">
		
		<div class="tabs tabs-style-bar">
			<nav>
				<ul>
					<li><a href="#section-bar-1" class="icon icon-box"><span>Epic Photographs</span></a></li>
					<li><a href="#section-bar-2" class="icon icon-display"><span>EVENTS</span></a></li>
				</ul>
			</nav>

			<div class="content-wrap">

				<!-- Tab-1 -->
				<section id="section-bar-1" class="agileits w3layouts">
					<h4>EPIC PHOTOGRAPHS</h4>
					<div class="gallery-grids">
						<div class="col-md-4 col-sm-4 gallery-top">
							
								<figure class="effect-bubba">
									<img src="images/fashion-1.jpg" alt="" class="img-responsive">
									<figcaption>
                                                                            <h4>
                                                                                Name:<input type="text" style="color:black">
                                                                            </h4>
									</figcaption>
								</figure>
                                                            
							
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-2.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-2.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-3.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-3.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-4.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-4.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-5.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-5.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-6.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-6.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-7.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-7.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-8.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-8.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/fashion-9.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/fashion-9.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Photography</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<!-- //Tab-1 -->

				<!-- Tab-2 -->
				<section id="section-bar-2" class="agileits w3layouts">
                                    <div id="event">
					<h4>EVENTS</h4>
					<div class="gallery-grids">
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-1.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-1.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Teacher's Day</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-2.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-2.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Singhad Trip</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-3.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-3.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>26th January</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-4.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-4.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Black Day</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-5.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-5.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Traditional Day</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-6.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-6.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Rahul Gandhi Event</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-7.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-7.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Teacher's Day</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-8.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-8.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Teacher's Game</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/events-9.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/events-9.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Fresher's UMESH</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
                                    </div>
				</section>
				
				
				<!-- //Tab-4 -->
				
			</div><!-- //Content -->
		</div><!-- //Tabs -->
	</div>
	
	
	
	
	<!-- //Booking -->
	
	
	<?php
	
	
	?>
	
	
	
	<div class="footer" id="footer">
		<div class="container">

			<h3>Drop us a Line</h3>
			<h5>SLAMBOOK-2020 is the digital SLAMBOOK which purpose is only for Entertaining. </h5>

                        
			<div class="footer-grids">

				<div class="col-md-3 col-sm-3 footer-grid footer-grid-1 address">
					<h4>By</h4>
					<address>
						<ul>
							
                                                        <li><span class="glyphicon glyphicon-user" aria-hidden="false"></span>Vishal Surgade</li>
                                                        <li><span class="glyphicon glyphicon-user" aria-hidden="false"></span>Ganesh Kadam</li>
                                                        <li><span class="glyphicon glyphicon-user" aria-hidden="false"></span>Hitesh Zambhare</li>
                                                        <li><span class="glyphicon glyphicon-user" aria-hidden="false"></span>Divyek Sisodiya,</li>
                                                        
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> D.Y.Patil College</li>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Akurdi, Pune</li>
						</ul>
					</address>
				</div>
				<div class="col-md-4 col-sm-4 footer-grid footer-grid-1 email">
					<h4>Email</h4>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:vishalsurgade4@outlook.com">vishalsurgade4@outlook.com</a></p>
                                        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:ganeshbkdm@gmail.com">ganeshbkdm@gmail.com</a></p>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:hiteshzhambare.com">hiteshzhambare123@gmail.com</a></p>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:hiteshzhambare.com">divyeksisodiya1@gmail.com</a></p>
				</div>

                            <!-- Newsletter -->
				<div class="col-md-5 col-sm-5 footer-grid footer-grid-1 newsletter">
					<h4>Newsletter</h4>
					<form action="#" method="post">
						<input type="text" placeholder="Email" name="Email" required="">
						<input type="submit" value="SUBSCRIBE">
					</form>
				</div>
				<!-- //Newsletter -->
				<div class="clearfix"></div>
				
			</div>

			<!-- Copyright -->
			<div class="copyright">
				<p>&copy; 2020 Slambook-2020 All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> GharBaitho pvt. ltd. </a><a href="#agilehomewthree" class="to-top scroll" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
			</div>
			<!-- //Copyright -->

		</div>
	</div>
	<!-- //Footer -->



	<!-- Custom-JavaScript-File-Links -->

		<!-- Default-JavaScript -->   <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Slider-JavaScript-Files -->
			<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
			<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
			<script type="text/javascript" src="js/camera.js"></script>
			<script>
				jQuery(function(){
					jQuery('#camera_wrap_2').camera({
						loader: 'bar',
						speed: 1000,
						pagination: false,
						thumbnails: false,
					});
				});
			</script>
		<!-- //Slider-JavaScript-Files -->

		<!-- Navigation-JavaScript -->
			<script src="js/nav.js"></script>
		<!-- //Navigation-JavaScript -->

		<!-- Progressive-Effects-Animation-JavaScript -->
			<script type="text/javascript" src="js/jquery.inview.min.js"></script>
			<script type="text/javascript" src="js/wow.min.js"></script>
			<script type="text/javascript" src="js/mousescroll.js"></script>
			<script type="text/javascript" src="js/main.js"></script>
		<!-- //Progressive-Effects-Animation-JavaScript -->

		<!-- Stats-Number-Scroller-Animation-JavaScript -->
			<script src="js/waypoints.min.js"></script> 
			<script src="js/counterup.min.js"></script> 
			<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000
					});
				});
			</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Gallery-Tab-JavaScript -->

		<!-- Swipe-Box-JavaScript -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //Swipe-Box-JavaScript -->

		<!-- Map-JavaScript -->
			
		<!-- //Map-JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->



</html>