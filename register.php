<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="register.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Register</title>
</head>
<body>

<main>
		<nav>
			<div class="navbar">
				<a href="#" class="logo">
					<img src="https://res.cloudinary.com/eriick/image/upload/v1568855212/logo1_eo9qds.jpg" alt="logoimg" height="100">
				</a>
			</div>
		</nav>
		<div class="container">
			<h2>Copenhagen Sign Up</h2>

			<form action="" method="post" onsubmit="return validate()">
				<div id="error"></div>
				<?php include ("error.php"); ?>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<input type="email" name="email" placeholder="Email" id="email">
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"
					required>
				<button id="submit" type="submit" class="mybtn" name="submitBtn">Sign Up</button>
				<p class="footer">Already have an account? <a href="index.php" class="footer-link">Login</a></p>
			</form>
		</div>
	</main>


<script src="register.js"></script>
</body>
</html>
