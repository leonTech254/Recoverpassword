<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="./leon.css">
  <script src="./jquery.js"></script>
</head>
<body>
	<div class="display" id="display"></div>
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
  		<button type="button" class="btn-reset" name="reset-password" id="btn-reset">reset password</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

	</div>
	<div class="reset-passwrod-container">

	
		
	<form action="" id="resetForm">
	<div class="email-field" action="./backedCode/forgetPassword.php">
			<input type="text" name="UserEmail" id="" placeholder="enter email">
			<button type="button" id="sendEmail">send reset-code</button>
	</div>
	
		
	<div class="cancel">X</div>
			<h3 class="form-t">reset password</h3>
			
			<div class="display-errors">
				all field required
			</div>
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





<script>
$("#btn-reset").click(()=>{
$(".reset-passwrod-container form").slideDown(2000)

$(".login-container").slideUp(2000)


})
$(".cancel").click(()=>{
$(".reset-passwrod-container form").slideUp(2000)

$(".login-container").slideDown(2000)


})

$("#sendEmail").click(()=>{
	var data=$(".email-field :input").serializeArray();
	console.log(data)
	$.post($(".email-field").attr("action"),
	data,
	function(info){$("#display").html(info)}
	
	
	
	)
	
// $(".email-field").fadeOut(2000)

// $(".login-container").slideDown(2000)


})



	
</script>




</body>
</html>