<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="./leon.css">
</head>
<body>
	<div class="login-container">
	<div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="passwords" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  		<button type="submit" class="btn-reset" name="reset-password">reset password</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

	</div>
	<div class="reset-passwrod-container">
		<form action="">
			<h3 class="form-t">reset password</h3>
			<div class="inputs">

			<input type="text" placeholder="enter verification code">
			<input type="password" placeholder="new password">
			<input type="password" placeholder="confirm password">
			

			</div>
			<div class="button">
				<button type="submit">reset password</button>
			</div>
		

		</form>


	</div>

</body>
</html>