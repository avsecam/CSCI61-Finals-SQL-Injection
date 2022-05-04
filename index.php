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
		<h1>Create an Account</h1>
		<!-- add action to form -->
		<form action="account.php" method="post">
			<div class="username">Username<input type="text" name="username"></div>
			<div class="email">Email Address<input type="email" name="email"></div>
			<div class="password">Password<input type="password" name="password"></div>
			<div class="firstName">First Name<input type="text" name="firstName"></div>
			<div class="lastName">Last Name<input type="text" name="lastName"></div>
			<input type="submit" value="Register" >
		</form>
	</main>


</body>
</html>