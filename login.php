<?php
require('functions.php');
session_start();
$conn = connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<style>
		* {
			font-family: sans-serif;
		}

		body {
			background-color: hsl(190 20% 80%);
			height: 100vh;
			width: 100vw;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
		}

		main {
			background-color: hsl(95 50% 75%);
			padding: 1rem;
			border-radius: 0.5rem;
			box-shadow: 0 0.5rem 1rem hsla(0 0% 50% / 25%);
		}

		h1 {
			margin: 0;
			margin-bottom: 1rem;
			text-align: center;
		}

		form > div {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		form > * + * {
			margin-top: 1rem;
		}

		form > div > input {
			margin-left: 2rem;
			padding: 0.4rem;
			border: none;
			border-radius: 0.3rem;
		}

		input[type="submit"] {
			width: 100%;
			background-color: white;
			padding: 1rem;
			border: none;
			border-radius: 0.3rem;
			text-transform: uppercase;
			cursor: pointer;
			transition: 0.2s;
		}

		input[type="submit"]:hover {
			background-color: hsla(0 0% 95% / 100%);
			box-shadow: inset 0 0 1rem hsla(0 0% 50% / 25%);
		}
	</style>


	<title>SQL Injection</title>
</head>
<body>
	
	<main>
		<h1>Login to your Account</h1>
		<!-- add action to form -->
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="username">Username<input type="text" name="username"></div>
			<div class="password">Password<input type="password" name="password"></div>
			<input type="submit" value="Login" >
		</form>
	</main>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$conn = connect();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '". $hashedPassword . "';";
		$res = mysqli_query($conn, $sql);

		if (mysqli_num_rows($res) > 0 ){
			echo "<br/>Logging in...";
			$user = mysqli_fetch_assoc($res);
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['firstname'] = $user['firstname'];
			$_SESSION['lastname'] = $user['lastname'];

			echo $_SESSION['username'];
			header("refresh:2; url=account.php");
		}
		else if (mysqli_num_rows($res) == 0){
			echo "Invalid username or password.";
		}
		else{
			echo "Error: " . mysqli_error($conn) . "</br>";
		}
	}
	closeConn($conn);
?>
</body>
</html>