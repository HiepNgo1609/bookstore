<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ĐĂNG NHẬP</title>
	<link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon1.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

	<link rel="stylesheet" href="css/login.css">

	<style type="text/css">
		#buttn {
			color: #fff;
			background-color: #ff3300;
		}
	</style>

</head>

<body style="background-image:url('images/Background_Book.jpg');">
	
	<?php
	include("connection/connect.php"); //INCLUDE CONNECTION
	error_reporting(0); // hide undefine index errors
	session_start(); // temp sessions
	if (isset($_POST['submit']))   // if button is submit
	{
		$username = $_POST['username'];  //fetch records from login form
		$password = $_POST['password'];

		if (!empty($_POST["submit"]))   // if records were not empty
		{
			$loginquery = "SELECT * FROM users WHERE username='$username'"; //selecting matching records
			$result = mysqli_query($db, $loginquery); //executing
			$row = mysqli_fetch_array($result);

			// if (is_array($row))  // if matching records in the array & if everything is right
			// {
			// 	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
			// 	header("refresh:1;url=index.php"); // redirect to index.php page
			// } else {
			// 	print_r($row);
			// 	$message = "Invalid Username or Password!"; // throw error
			// }
			if (is_array($row)) {
				if ($row['password']==md5($password)) {
					$_SESSION['username'] = $username;
					
					header("refresh:1;url=index.php");
				} else {
					
					$message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
				} 
			} else {
				$message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
			}
		}
	}
	?>

	<!-- Form Mixin-->
	<!-- Input Mixin-->
	<!-- Button Mixin-->
	<!-- Pen Title-->
	<div class="pen-title" style="color:yellowgreen">
	
		<!--h1 style="font-weight:600">Chào mừng đến với Tủ sách Tri thức Việt</h1-->
	</div>
	
	<!-- Form Module-->
	<div class="module form-module">
		<div class="toggle">

		</div>
		
		<div class="form" style="opacity:100%">
			<h2 style="color:seagreen">ĐĂNG NHẬP</h2>
			<span style="color:red;"><?php echo $message; ?></span>
			<span style="color:green;"><?php echo $success; ?></span>
			<br><br>
			<form action="" method="post">
				<input type="text" placeholder="Nhập tên đăng nhập" name="username" />
				<input type="password" placeholder="Nhập mật khẩu" name="password" />
				<input type="submit" id="buttn" name="submit" value="Đăng nhập" />
			</form>
		</div>

		<div class="cta">Bạn chưa có tài khoản?<a href="registration.php" style="color:#f30;"> Tạo tài khoản</a></div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<canvas id="canvas">Canvas không hổ trợ trình duyệt của bạn.</canvas>
	<script type="text/javascript" src="welcome.js"> </script>
</body>

</html>