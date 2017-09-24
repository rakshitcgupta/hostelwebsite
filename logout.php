<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
	<title>SPIT Hostel</title>

	<script src="first.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="custom.css">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body data-spy="scroll" data-target="#hostelnav">
	<!-- Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-right" id="hostelnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					
					<span class="sr-only" href="#">Hostel SPIT</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="#" class="navbar-brand">Hostel SPIT</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse ">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="council.html">Council</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="mess.html">Mess</a></li>
					<li><a href="events.html">Events</a></li>
					<li  class="active"><a href="contact.html">Suggestions/Complaints</a></li>
				</ul>
			</div>


		</div>

	</nav>

	<div class="well contactbg" id="contactForm">
		<br><br>
		<div class="container">
			<div class="panel panel-info">
				
				<div class="panel-heading">
					<h2>Contact us <br><small>Complaints, suggestions, feedback? You are welcome!</small></h2>
				</div>

				<div class="panel-body">
					Submit all your enquiries, complaints, suggestions, help or any other feedback in this form. This will help in the awareness of hostel issues and will help in development of the hostel. Thanks for your awesome feedback !

    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
	</div>

			</div>
		</div>
	</div>


	
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<section>
					<footer class="text-center">
						<h6>
							Copyright 2017, S.P.I.T.
						</h6>
					</footer>
				</section>
			</div>
		</div>
	</div>

			

<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</body>
</html>