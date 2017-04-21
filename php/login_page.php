<?php
session_start();
$message = $_SESSION['message'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>SignUp Form</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/front.css" rel="stylesheet" type="text/css" media="all" />
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/jquery-1.11.2.min.js"></script>
		<script src="assets/jquery.validate.min.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="headertop_desc">
				<div class="wrap">
					<div class="nav_list">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="contact.html">Sitemap</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="account_desc">
						<ul>
							<li><a href="signup_page.php">Register</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="preview.html">Delivery</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">My Account</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<br/><br/>
		<div class="container">
		<div class="logo">
			<a href="index.html"><img src="logo.png" alt="" /></a>
		</div>
			<div class="signup-form-container">
				<form method="post" role="form" id="register-form" autocomplete="off" action="php/user_login.php">
					<div class="form-header">
						<h3 class="form-title"><i class="fa fa-user"></i>Login</h3> 
						<div class="pull-right">
							<h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
						</div>  
					</div>	  
					<div class="form-body">			  
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								<input name="loginusername" type="text" class="form-control" placeholder="Username">
							</div>
							<span class="help-block" id="error"></span>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
								<input name="loginpassword" id="password" type="password" class="form-control" placeholder="Password">
							</div>  
							<span class="help-block" id="error"></span>                     
						</div>
						<?php
						echo $message;
						unset($message);
						?>
					</div>	
					<div class="form-footer">
						<button type="submit" class="btn btn-info">
						<span class="glyphicon glyphicon-log-in"></span> Login
						</button>
					</div>	
				</form>
			</div>
			<div class="loginbtn">
				<span>New to Movie Store?</span>
				<a href="signup_page.php">SignUp</a>
			</div>
		</div>
	</body>
</html>