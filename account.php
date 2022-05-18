<?php

session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];

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
			padding: 2rem;
			border-radius: 0.5rem;
			box-shadow: 0 0.5rem 1rem hsla(0 0% 50% / 25%);
		}

		h1 {
			margin: 0;
			text-align: center;
			white-space: nowrap;
		}

		.userInfo > * + * {
			margin-top: 0;
		}
	</style>

	<title>Account</title>
</head>
<body>
	<main>
		<h1>Good day, <?php echo $firstname; ?></h1>
		<div class="userInfo">
			<h2 class="username">Username: <?php echo $username; ?></h2>
			<h2 class="email">Email Address: <?php echo $email; ?></h2>
			<h2 class="fullName">Full Name: <?php echo "{$firstname} {$lastname}"; ?></h2>
		</div>
	</main>
</body>
</html>