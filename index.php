<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>SPIT Hostel</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="custom.css">

  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
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
					<li  class="active"><a href="index.php">Suggestions/Complaints</a></li>
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
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
	  
	  
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="index.php" method="post" >
          
            <div class="field-wrap" >
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="password"/><span id="demo"></span>
		  </div>

          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input id="name" type="text"   name='firstname' />
		    </div>	
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input id="name" type="text" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
 </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
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