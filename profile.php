<?php
	include ("db.php");
	/* Displays user information and some useful messages */
	session_start();
	$admin_account = 0;
	$complaints = array();

	// Check if user is logged in using the session variable
	if ( $_SESSION['logged_in'] != 1 ) {
		$_SESSION['message'] = "You must log in before viewing your profile page!";
		header("location: error.php");    
	}
	else {
		// Makes it easier to read
		if($_SESSION['first_name'] == 'Admin'){
			$admin_account = 1;
			$result = $mysqli->query("SELECT complaint FROM users where first_name != 'Admin'");
		
			while($complaint_list = $result->fetch_assoc()){
				$complaints[] = $complaint_list['complaint'];
			}
		}else{
			if (isset($_POST['submitcom'])){
				echo "SUBMIT SUCCESS!!";
			//$result = $mysqli->query("update users set complaint = ".$_POST['myComplaint']."where email =".$_SESSION['email']);
			//$results = $mysqli->query("select complaint from users where email =".$_SESSION['email']);
//$row = mysqli_fetch_array($results);			
//if (is_array($row) ) {
// output data of each row
//  while($row = mysqli_fetch_assoc($result)) {
//    echo $row["complaint"];
//}
//} else {
//  echo "0 results";
//}
			//while($complaint_list = $results->fetch_assoc()){
			//echo($complaint_list['complaint']);}
			//echo $results;
			}
		}
		$first_name = $_SESSION['first_name'];
		$last_name = $_SESSION['last_name'];
		$email = $_SESSION['email'];
		$active = $_SESSION['active'];
		$myComplaint = $_POST['myComplaint'];
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>SPIT Hostel</title>

	<script type="text/javascript" src="first.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="custom.css">
	<title>Welcome <?= $first_name.' '.$last_name ?></title>
	<?php include 'css/css1.html'; 
		?>
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
		<div class="tab-content">
			<h1 style="color:;margin-left:;">Welcome</h1>
			<?php
				
				// Keep reminding the user this account is not active, until they activate
				/*if ( !$active ){
					echo
					'<div class="info">
					Account is unverified, please confirm your email by clicking
					on the email link!
					</div>';
				}*/
			?>
          
			<h2><?php echo $first_name.' '.$last_name; ?></h2>
			<p><?= $email ?></p>
			

    
			<?php
			
			
			/*if ( isset($_POST['myComplaint']) )
			{
             $_SESSION['myComplaint'] =$mysqli->escape_string($_POST['myComplaint']);
              $myComplaint = $_SESSION['myComplaint'];
              }
          */
			//echo $_SESSION['password'];
			//$myComplaint = $_POST['myComplaint'];
			//echo $myComplaint;
			/*$first_name=$_SESSION['first_name'];
			$last_name=$_SESSION['last_name'];
			$email=$_SESSION['email'];*/
			
			
$sql = "INSERT INTO users (first_name,last_name,email,Complaint )"."VALUES ('$first_name','$last_name','$email','$myComplaint')";
			if($mysqli->query($sql)){
				//echo "yes";
			}
			else{
				//echo $_SESSION['password'];
				echo "Please enter the complaint"; 
				echo mysqli_error($mysqli);
			}
			
			
				if($admin_account == 1){			
			?>
			<h2 align = 'center'>USER COMPLAINTS : </h2>
				<ul>
				<?php
					foreach($complaints as $x => $x_value) {
				?>
					<li><?php echo ($x_value);?></li>
						<?php } ?>
				</ul>
					<a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
				<?php }
				else{			
					$result = $mysqli->query("SELECT complaint FROM users where email = '".$_SESSION['email']."'");
				?>
				<h2>Your Current Complaints : </h2>
				
				
				<h3> 
					<?php while($row = $result->fetch_array())
					{echo ($row['complaint']); 
					echo "<br />";}?></h3>
				<h3> Enter your complaint here : </h3>
					<form action=""  method="post" >
		 
		
		   <div class="field-wrap">
            <label>
             Complaint<span class="req">*</span>
            </label>
             <!-- <input type="textarea" required autocomplete="off" name='myComplaint'/>-->
			 <textarea rows="5" cols="10"  name="myComplaint" onblur="validname();">
			 </textarea>
			
          </div>
           
         
          <button type="submit" class="button button-block" name="submitcom" />submit...</button>
          	</form>
			<a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
				</div>
			<?php 
			
			
			}
}			?>
			</div>
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