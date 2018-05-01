<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		session_start();
		$_SESSION['pages']="signup.php";
		include ("menu.php");
	?>
	<title>Forgot Password - SabahTCM</title>
</head>
<body>
	<div id="body">
		</br>
		<div class="sidebar">	 
			<p><a href="login.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
		</div>
		<div id="home" style="width:700px">
			<div id="hd">Please fills the information below</div>
			</br></br>
			<form class="form-inline" method="POST" action="" enctype="multipart/form-data">
				<!--Username-->
				<div class="form-group">
					<label style="padding-left: 125px">Username:</label>
					<input style="width:300px" type="text" data-toggle="tooltip" data-placement="right" class="form-control" value="<?php echo $username;?>" name="username" minlength="8" placeholder="Username" title="Must match with the username that already signup" required>
				</div>
				<br><br>
				<!--Email-->
				<div class="form-group">
					<label style="padding-left: 164px">Email:</label>
					<input style="width:300px" type="email" data-toggle="tooltip" data-placement="right" class="form-control" value="<?php echo $email;?>" name="email" placeholder="example@email.com" title="Must match with the email that already signup" required>
				</div>

				<div class="form-group" style="padding-top:20px">
					<button class="form-control" value="action" name="action" type="submit" class="btn btn-lg btn-primary btn-block" style="margin-left: 300px"><i class="icon-save icon-large"></i>&nbsp;Forgot Password</button>
				</div>
			</form>
<button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
</form>
</div>
</body>
</html>
<?php
	require "db_conn.php";
	if(isset($_POST) & !empty($_POST)){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$sql = "SELECT * FROM user WHERE username = '$username'";
		$res = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($res);
		if($count == 1){
			$r = mysqli_fetch_assoc($res);
			$password = $r['password'];
			$to = $r['email'];
			$subject = "Your Recovered Password";
			$message = "Here is your login information for accessing the SabahTCM."."\nPlease use this password to login.\nPassword: ".$password;
			$email_from = "admin@sabahtcm.com";
			$headers = "From: ".$email_from;
			if(mail($to, $subject, $message, $headers)){
				echo "Your Password has been sent to your email.";
			}else{
				echo "Failed to Recover your password, try again";
			}
		}else{
			echo "User name does not exist in database";
		}
	}
?>