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
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Welcome <?= $first_name.' '.$last_name ?></title>
	<?php include 'css/css.html'; 
		?>
</head>
<body>
	<div class="form">
		<div class="tab-content">
			<h1 style="color:blue;margin-left:30px;">Welcome</h1>
			<p>
			<?php 
				    
				// Display message about account verification link only once
				if ( isset($_SESSION['message']) )
				{
					echo $_SESSION['message'];
				  
					// Don't annoy the user with more messages upon page refresh
					unset( $_SESSION['message'] );
				}
			?>
			</p>
			<?php
				
				// Keep reminding the user this account is not active, until they activate
				if ( !$active ){
					echo
					'<div class="info">
					Account is unverified, please confirm your email by clicking
					on the email link!
					</div>';
				}
			?>
          
			<h2><?php echo $first_name.' '.$last_name; ?></h2>
			<p><?= $email ?></p>
			<a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    
			<?php
			
			
			if ( isset($_POST['myComplaint']) )
			{
             $myComplaint = $_POST['myComplaint'];
              //echo $myComplaint;
              }
          
			//echo $_SESSION['password'];
			//$myComplaint = $_POST['myComplaint'];
			//echo $myComplaint;
			$first_name=$_SESSION['first_name'];
			$last_name=$_SESSION['last_name'];
			$email=$_SESSION['email'];
			
$sql = "INSERT INTO users (first_name,last_name,email,Complaint )"."VALUES ('$first_name','$last_name','$email','$myComplaint')";
			if($mysqli->query($sql)){
				echo "yes";
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
				<?php }
				else{			
					$result = $mysqli->query("SELECT complaint FROM users where email = '".$_SESSION['email']."'");
				?>
				<h2>Your Current Complaint : </h2>
				<h3> 
					<?php while($row = $result->fetch_array())
					{echo ($row['complaint']); 
					echo "<br />";}?></h3>
				<h3> Enter your complaint here : </h3>
					<form action="";  method="post" >
		 
			<div>
            <label>
              Complaint
            </label>
             <!-- <input type="textarea" required autocomplete="off" name='myComplaint'/>-->
			 <textarea rows="5" cols="10" name="myComplaint">
			 </textarea>
          </div>
           
         
          <button type="submit" class="button button-block" name="submitcom" />submit...</button>
          	</form>
				</div>
			<?php 
			
			
			}
}			?>
			</div>
	</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
