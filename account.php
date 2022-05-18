<?php
require('functions.php');
error_reporting(0);
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

		section.search {
			width: 40%;
			margin-left: 2rem;
		}

		section.search > * {
			width: 100%;
		}

		form.queries {
			margin-bottom: 1rem;
		}
		
		input[type="text"] {
			width: 100%;
			margin-bottom: 1rem;
		}

		th,
		td {
			padding-inline: 1rem;
			text-align: center;
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

	<section class="search">
		<form class="queries" action="<?=$_SERVER['PHP_SELF']?>" method="GET">
			<input type="text" name="query" placeholder="Search...">
			<div class="buttons">
				<input type="submit" value="Search Username">
				<!-- <input type="submit" value="Search Full Name"> -->
			</div>
		</form>
		<table class="results">
			<tr class="headers">
				<th>Username</th>
				<th>Full Name</th>
			</tr>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "GET"){
				
					$conn = connect();
					$username = $_GET['query'];
			
					$sql = "SELECT * FROM users WHERE username = '$username';";
					if ($result = mysqli_query($conn, $sql)) {
						while ($row = $result->fetch_array()) {
							echo '<tr class="user">';
							echo "<td>" . $row['username'] . "</td><td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
							echo "</tr>";
						}
					}
					else{
						echo "Error: " . mysqli_error($conn);
					}
					closeConn($conn);
				}
			?>
		</table>
	</section>
</body>
</html>