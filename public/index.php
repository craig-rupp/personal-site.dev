<?php
require_once 'database/db_connect.php';
require_once 'Input.php';

function pageController($dbc){
	$errors = [];
	$min = 0;
	$max = 400;

	if(Input::has('InputName') && Input::has('InputEmail') && Input::has('InputMessage'))
	{
		try {
			$InputName = Input::getString('InputName', $min, $max);
		} catch (Exception $e) {
			$errors[] = "Name " . $e->getMessage() . PHP_EOL;
		}
		try {
			$InputEmail = Input::getString('InputEmail', $min, $max);
		} catch (Exception $e) {
			$errors[] = "Name " . $e->getMessage() . PHP_EOL;
		}
		try {
			$InputMessage = Input::getString('InputMessage', $min, $max);
		} catch (Exception $e) {
			$errors[] = "Name " . $e->getMessage() . PHP_EOL;
		}

		if(empty($errors))
		{
			$stmt = $dbc->prepare('INSERT INTO contacts (name, email, message)
				VALUES (:InputName, :InputEmail, :InputMessage)');

			$stmt->bindValue(':InputName', $InputName, PDO::PARAM_STR);
			$stmt->bindValue(':InputEmail', $InputEmail, PDO::PARAM_STR);	
			$stmt->bindValue(':InputMessage', $InputMessage, PDO::PARAM_STR);

			$stmt->execute();		
		}
	}
	return [];
	// 	'errors' => $errors
	// ];
}
extract(pageController($dbc));
?>
 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
	<meta name="author" content="">

	<title>My Landing Page</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
	<!-- Custom Google Web Font -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Custom CSS-->
	<link href="css/general.css" rel="stylesheet">
	<link href="css/my_custom.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
	<div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay=".9s">Craig Rupp</h1>
			<h4 class="h4_home wow fadeIn" data-wow-delay="1.2s" id="title_description">Developer & Client Stratego</h4>
			<ul class="list-inline intro-social-buttons">
				<li><a href="https://www.linkedin.com/in/craigrupp19" target="_blank" class="btn  btn-sm mybutton_cyano wow fadeIn" data-wow-delay="1.5s"><span class="network-name">LinkedIn</span></a>
				</li>
				<li id="download" ><a href="Download/Resume16.pdf" download="Resume16.pdf" class="btn  btn-sm mybutton_standard wow swing wow fadeIn" data-wow-delay="1.8s"><span class="network-name">Resume</span></a>
				</li>
			</ul>
		</div><br>    
		<!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.8s"  href="#education"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
	</div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Portfolio</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="menuItem"><a href="#education">Education</a></li>
					<li class="menuItem"><a href="#about_me">About</a></li>
					<li class="menuItem"><a href="#projects">Projects</a></li>
					<li class="menuItem"><a href="#contact">Contact</a></li>
				</ul>
			</div>	   
		</div>
	</nav> 

 <!-- education -->
	<div id="education" class="content-section-b">
	 <div class="container">
			<div class="col-md-12 text-center" id="education">
				<img class="img-circle" src="img/icon/pencils.svg">
				<h2>Education</h2>
			</div><br>

	  <div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-2">
		  <h3><strong>Codeup</strong></h3><h5>April 2016 - September 2016</h5>
		  <ul>
			 <li>
			  16 week immersive fullstack web development course focused on LAMP+J languages and technologies.
			</li>
			<li>
			  600+ hours in and outside classroom learning and building real world-level projects.
			</li>
			<li>
			  Worked extensively with provisioning tools Vagrant and Ansible, Git for version control and the Linux command line interface.
			</li>
			<li>
			  Worked in a team of three to create fitwager, a unique web application allowing fitbit users to challenge their friends with bragging rights on the line through our wager coin system.
			</li>
		  </ul>
		</div>
	  </div> 
	  <div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-2">
			<h3><strong>University of Texas</strong></h3><h5>College of Communication - B.S. RTF (2008 - 2012)</h5>
		  <ul>
			<li>
			  Cumulative GPA over 3.0 with over 130 hours of accredited hours.
			</li>
			<li>
			  Intern for Keller Williams Realty, ESPN Radio & Alamo Drafthouse Cinemas.
			</li>
			<li>
			  Senior Producer for College Pressbox and College Crossfire at Texas Student Television.
			</li>
		  </ul>
		</div>
	  </div> 
	</div><br>

<!-- end of education -->
	
<!-- About Me (Video) -->
	<div id ="about_me" class="content-section-a">

		<div class="container">
			<div class="col-md-12 text-center" id="about_me">
				<img class="img-circle" src="img/icon/laptop.svg">
				<h2>About Me</h2>
			</div><br>
			
			<div class="row">
				<div class="text-center embed-responsive embed-responsive-16by9">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/NVor8sD8RqU" frameborder="0" allowfullscreen></iframe>
				</div>	 
			</div>
		</div><br>

<!-- About Me End -->

<!-- Projects -->
	<div id="projects" class="content-section-b">
		<div class="container">
			<div class="col-lg-12 text-center">
				<h2>Projects</h2>
				<h4>Click on each project for a description of each as well as the technologies used for each</h4>
			</div><br>
			<div class="row text-center">
					<img class="img-circle" src="img/icon/map.svg">
					<img class="img-circle" src="img/icon/pencil.svg">
					<img class="img-circle" src="img/icon/folder.svg">
			</div><br>
			<div class="row">
				 <div class="col-xs-4" id="project_files">
				 	<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#simple_simon">
						<img class="img-responsive" src="img/simple_simon.png">
					</a>
					<div class="caption text-center">Simple Simon</div>
				 </div>
				 <div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#weather_app">
						<img class="img-responsive" src="img/drag_weather.png">
					</a>
					<div class="caption animated flash text-center">Weather Forecast</div>
				 </div>
				 <div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#calculator">
						<img class="img-responsive" src="img/calculator.png">
					</a>
					<div class="caption text-center">Calculator</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#restaurants">
						<img class="img-responsive" src="img/fav_restaurants.png">
					</a>
					<div class="caption text-center">Google Maps</div>
				</div>
				<div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#parks">
						<img class="img-responsive" src="img/np.png">
					</a>
					<div class="caption text-center">National Parks Register</div>
				</div>
				<div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#sodalister">
						<img class="img-responsive" src="img/ad_lister.png">
					</a>
					<div class="caption text-center">AdLister Craiglist Clone</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#fitwager">
						<img class="img-responsive" src="img/fw.png">
					</a>
					<div class="caption text-center">Fitwager</div>
				</div>
				<div class="col-xs-4" id="project_files">
					<a class="thumbnail btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#codedecipher">
						<img class="img-responsive" src="img/cd.png">
					</a>
					<div class="caption text-center">Code Decipher</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals -->
		<!--Simon -->
		<div id="simple_simon" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Simple Simon</h4>
		      </div>
		      <div class="modal-body">
		        <p>Simple Simon game adapted to Bop-It theme, sounds also included on user click and a lighting of one of the five areas.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, Audacity(Audio)</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Weather -->
		<div id="weather_app" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">3 Day Forecast</h4>
		      </div>
		      <div class="modal-body">
		        <p>Utilizing Open Weather Maps API, this web app pulls the location of draggend event on Google Maps and produces a three day forecast for the city the marker is placed on.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, API, Google Maps Events</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Calculator -->
		<div id="calculator" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">JavaScript Calculator</h4>
		      </div>
		      <div class="modal-body">
		        <p>JavaScript Calculator performs addition, subtraction, multiplication and division. Also allows for decimals and negative numbers.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Restaurants/Google Maps  -->
		<div id="restaurants" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Google Maps / Marker Events</h4>
		      </div>
		      <div class="modal-body">
		        <p>On page load, four marker events are dropped on restaurants in the region I grew up in. Each restaurant has a unique image and modal that allows for the user to navigate to their respective websites.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, Google Maps Events</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--National Parks  -->
		<div id="parks" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">National Parks Registry</h4>
		      </div>
		      <div class="modal-body">
		        <p>Registry of National Parks formatted with data stored in MySQL database. PHP provided the logic to paginate, search and establish the connection with the database. HTML, CSS and a little jQuery provided a few aesthetic front-end detail to bring the page together. There is also a form to submit a National Park and add to the registry and SQL database.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, PHP, MySQL</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--SodaLister  -->
		<div id="sodalister" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">AdLister Clone </h4>
		      </div>
		      <div class="modal-body">
		        <p>Built with one other student, our AdLister clone allows a user to create a user profile through our sign-up portal and contribute to the ads/products home page. User can sign in, add, remove and update products they have contributed to the site as well as see the items they have added in their unique profile page.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, PHP, MySQL</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Fitwager -->
		<div id="fitwager" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><a href="https:fitwager.net" target="_blank">Fitwager</a></h4>
		      </div>
		      <div class="modal-body">
		        <p><u><a style="color:#00d053" href="https:fitwager.net" target="_blank">Fitwager</a></u> is a fully functioning webapp that was developed by me and two other students for our final demo day application. Allowing the user to synch their fitbit account with our Oauth process, fitwager either creates or logs in a user and allows them to compete against their friends in fitness challenges with unique bet types. Winners of the challenges are determined through our connection with the Fitbit API and getting the unique fitness stats for each competitor in the challenge.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery, PHP, MySQL, Laravel, OAuth, Fitbit API</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Code Decipher  -->
		<div id="codedecipher" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Code Decipher</h4>
		      </div>
		      <div class="modal-body">
		        <p>The page is broken into three unique sections and allows a user to input HTML, CSS and JavaScript with a corresponding result section showing the action of the user inputs.</p>
		        <p>
		      </div>
		      <div class="modal-footer">
		      	<p class="modal-style"><u>Tech used :</u> HTML, CSS, JS, jQuery</p>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

<!-- End of Projects

<!-- Languages Glyphs -->

	<div id="languages" class="content-section-c">
        <div class="container">
          	<div class="col-lg-12 text-center white wrap_title">
				<h2>Tech & Tools</h2>
				<h4>Below are languages/tools used in projects and code available on my github</h4>
			</div>
			<div class="row text-center">
					<img class="img-circle" src="img/icon/speed.svg">
					<img class="img-circle" src="img/icon/loop.svg">
					<img class="img-circle" src="img/icon/config.svg">
			</div><br>
			<div class="row text-center">
		     	<div class="col-sm-2 col-sm-offset-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/html-5-badge.png" alt="HTML5">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/css.png" alt="CSS3">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/js.png" alt="js">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/php.png" alt="PHP">
		     	</div>
		    </div>
		    <div class="row text-center">
		     	<div class="col-sm-2 col-sm-offset-3" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/python.png" alt="Python">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/sql.png" alt="CSS3">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/gh.png" alt="CSS3">
		     	</div>
		    </div>
		     <div class="row text-center">
		     	<div class="col-sm-2 col-sm-offset-4" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/linux-1.png" alt="Python">
		     	</div>
		     	<div class="col-sm-2" id="project_files">
		        	<img class="img-circle" src="img/prog_icon/my_ic_2/png/api.png" alt="CSS3">
		     	</div>
		    </div>
		</div>
    </div>

<!-- End of Languages glyphs -->


	

	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Me</h2>
			</div>
			
			<form role="form" action="http:" method="post" >
				<div class="col-md-6">
					<div>
						<?php if(!empty($errors)) : ?>
							<?php foreach ($errors as $individualMessage) : ?>
							<p><?= $individualMessage ?>
							<?php endforeach ?>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg"><br><br>
				<div class="col-md-5 col-md-push-1 address">
					
					<h3>Social & Email</h3>
					<li class="social"> 
					<a href="https://github.com/craig-rupp" target="_blank"><i class="fa fa-github-square fa-size"> </i></a>
					<a href="https://twitter.com/CraigTRupp" target="_blank"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="https://www.linkedin.com/in/craigrupp19
					" target="_blank"><i class="fa fa-linkedin-square fa-size"> </i></a>
					<a href="mailto:craigrupp@utexas.edu"><i class="fa fa-envelope-o"></i></a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<script src="js/custom_script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>
