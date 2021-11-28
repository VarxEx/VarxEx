<?php 
	require 'functions.php';
	if (isset($_SESSION['login'])) {
		header("location: main.php");
	}
	if(isset($_POST['login'])) {
		snama($_POST['username']);
		login($_POST['username'], $_POST['password'], 'main.php');
		$error = true;
	 }
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<div class="container">
			<h1>Varx Web</h1>
				<?php if( isset($error)) : ?>
					<p style="color: red;">username / password wrong!</p>
			<?php endif; ?>
			<ul>
				<form action="" method="post">
					<li>
						<input type="text" name="username" placeholder="username">		
					</li>
					<li>
						<input type="password" name="password" placeholder="password">
					</li>
					<li>
						<button type="submit" name="login">Log In</button>
					</li>
					<li>
						<a href="signup.php">Don't have account?</a>
					</li>
				</form>
			</ul>
		</div>
	</body>
</html>