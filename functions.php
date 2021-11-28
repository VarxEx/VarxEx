<?php 
	session_start();

// connect to database
	$conn = mysqli_connect("localhost", "root", "", "varxweb");
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}

// function login from database
	function login($name, $pass, $to) {
		global $conn;
		$username = $name;
		$password = $pass;
		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
		if (mysqli_num_rows($result) === 1 ); {
			$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row['password'])) {
			$_SESSION['login'] = true;
			header("location: $to");
			exit;
		}
	}
		// $result = $q [0]['username'];
	// if( $result === $username ) {
	// 		$row = query("SELECT password FROM user");
	// 		$rows = $row[0]['password'];
	// 		if( password_verify($password, $rows)) {
	// 				$_SESSION['login'] = true;
	// 				header("location: $to");
	// 				exit;
	// 		} 
	// 	}
	}
	
// function signup insert database
	function signup($data) {
		global $conn;
		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password2 = mysqli_real_escape_string($conn, $data["password2"]);
		$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('username already exists!')
			</script>";
			return false;
		}
		if( $password !== $password2 ) {
			echo "<script>
			alert('Confirm Password not recognize!');
			</script>";
			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
		return mysqli_affected_rows($conn);
	}

// function session
	function session($to) {
		if (!isset($_SESSION['login'])) {
			header("location: $to");
		}
	}

// function session nama
	function snama($snama) {
		$_SESSION['nama'] = $snama;
	}

 ?>


