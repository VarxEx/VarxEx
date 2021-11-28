<?php 
	require 'functions.php';
	if (isset($_POST['signup'])) {
		 if ( signup($_POST) > 0 ) {
			echo "<script>
						alert('Sign Up Success!');
					</script>";
					header("location: login.php");
		} else {
			echo mysqli_error($conn);
		}
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="signup.css">
	</head>
	<body>
		<div class="container">
			<h1>Varx Web</h1>
			<ul>
				<form action="" method="post">
					<li>
						<input type="text" name="username" placeholder="username">		
					</li>
					<li>
						<input type="password" name="password" placeholder="password">
					</li>
					<li>
						<input type="password" name="password2" placeholder="confirm password">
					</li>
					<li>
						<button type="submit" name="signup">Sign Up</button>
					</li>
				</form>
			</ul>
		</div>
	</body>
</html>