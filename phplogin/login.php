<!DOCTYPE html>
<html lang="en">
	<?php 
	session_start();
	?>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="../css/login-style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<?php
				if (isset ($_SESSION['message'])) {
				print($_SESSION['message']); 
				$_SESSION['message']=""; 
				}
				?>
				<a href="register.html">Create Login</a>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>