<!DOCTYPE html>
<html>
<head>
	<link href="images/logo2.jpg" rel="icon" /> <!--Icon-->
	<link href="css/style.css" rel="stylesheet" /> <!--style navigation-->
	<link href="css/font-awesome.css" rel="stylesheet" /> <!--font-awsome icon-->
	<link href="css/docs.css" rel="stylesheet" /> <!--doc css-->
	<link href="css/style.css" rel="stylesheet" type="text/css" >
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/> <!--Bootstrap-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script> <!--Bootstrap script-->
	<title>SignUp - SabahTCM</title>
</head>
<body>
	<?php
		include ("menu.php");
		$username=isset($_POST['username']) ? $_POST['username'] : NULL;
		$email=isset($_POST['email']) ? $_POST['email'] : NULL;
	?>
	</br>

	<div id="body">
		</br>
		<div class="sidebar">	 
			<p><a href="herbs.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
		</div>
		<div id="home" style="width:700px">
			<div style="padding:10px 5px 4px 10px; background:grey; font-size:12px; color:white">
				<p><strong style="font-size:14px">Please fills the information below</strong></p>
			</div>
			</br></br>
			<form class="form-inline" method="POST" action="" enctype="multipart/form-data">
				<!--Username-->
				<div class="form-group">
					<label style="padding-left: 125px">Username:</label>
					<input style="width:300px" type="text" data-toggle="tooltip" data-placement="right" class="form-control" value="<?php echo $username;?>" name="username" minlength="8" placeholder="Username" title="Must contain at least 8 characters" required>
				</div>
				<br><br>
				<!--Password-->
				<div class="form-group">
					<label style="padding-left: 126px">Password:</label>
					<input style="width:300px" type="password" data-toggle="tooltip" data-placement="right" class="form-control" value="" name="password"  placeholder="Pa55w0rd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 characters" required>
				</div>
				<br><br>
				<!--Password-->
				<div class="form-group">
					<label style="padding-left: 70px">Reenter Password:</label>
					<input style="width:300px" type="password" data-toggle="tooltip" data-placement="right" class="form-control" value="" name="cpassword" minlength="8" placeholder="Pa55w0rd" title="Must match with Password" required>
				</div>
				<br><br>
				<!--Email-->
				<div class="form-group">
					<label style="padding-left: 155px">Email:</label>
					<input style="width:300px" type="email" data-toggle="tooltip" data-placement="right" class="form-control" value="<?php echo $email;?>" name="email" placeholder="example@email.com" required>
				</div>
				<br><br>
				<div class="form-group" style="padding-top:20px">
					<button class="form-control" value="action" name="action" type="submit" class="btn btn-save" style="margin-left: 300px"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
				</div>
			</form>
			
			<?php
				$action = isset($_POST['action']) ? $_POST['action'] : NULL;
				//save to db
				if($action!=NULL){
					$username = $_POST["username"];
				    $password = $_POST["password"];
					$cpassword = $_POST["cpassword"];
					$email = $_POST['email'];

					//for checking the username if existed in db
					$user=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'")or die(mysqli_error($conn));
					$un=mysqli_fetch_assoc($user);
					//checking the username if existed in db
					if($un!=NULL){
						$msg="The Username was Existed, please create Another Username.</br>";
					}
					//for checking the email if existed in db
					$mail=mysqli_query($conn,"SELECT email FROM user WHERE email='$email'")or die(mysqli_error($conn));
					$em=mysqli_fetch_assoc($mail);
					//checking the email if existed in db
					if($em!=NULL){
						$msg=$msg."The Email was Registered, please proceed to Login or use Different Email.</br>";
					}
					//checking password same
					if($password!=$cpassword){
						$msg=$msg."The password are not match!";
					}
					if($msg==NULL){
						$sql="INSERT INTO user (username, password, email) 
							VALUES('$username', '$cpassword', '$email')";
						mysqli_query($conn,$sql)or die(mysqli_error($conn));
						echo "<script>alert('Sign Up Successful!!'); location.href='herbs.php';</script>";
					}
					else{
						echo "<script>alert('".$msg."');</script>";
					}/*end ifelse check password*/
				}
			?>
		</div>	
	</div>			
	</br>
	<?php
		include("footer.php");
	?>
</body>
</html>