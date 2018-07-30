<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	 <div class="input-group">
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="text" name="username" placeholder="Username"  value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Password"  name="password_1">
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Confirm password"  name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? 
		<a href="login.php">Sign in</a>
		<a href="home.php">Home</a>
  	</p>
  </form>
</body>
</html>