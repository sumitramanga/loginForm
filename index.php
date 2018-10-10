<?php
	// output buffer on
	ob_start();

	// Keep the state we preserve
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Session</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="loginBG"></div>
		<div class="container contentContainer">
			<h1 class="header">Care Me</h1>

			<div class="message">
				<?php
				$msg = '';

				// check if $_POST is not empty
				// isset($_POST['login'] checks if submit button is clicked
				if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
					// check if username and password match what's below
					// $_POST['username'] is a global variable
					if ($_POST['username'] === 'Yoobee' && $_POST['password'] === '1234') {
						// By default the sesssion is false
						$_SESSION['valid'] = true;
						$_SESSION['timeout'] = time();
						$_SESSION['username'] = 'Yoobee'; // setting the session variable Username

						echo('Success! You have entered the correct username and password');

						header('Refresh:2; URL=home.php');
					} else {
						echo('Incorrect username and/or password. Please try again');
					}
				}

				 ?>
			</div>

			<div class="formContainer container">
				<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">
					<h5><?php echo $msg; ?></h5>
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control"><br>

					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control"><br>

					<button type="submit" name="login" class="btn btn-primary btnSubmit">Continue > </button>
				</form>

			</div>


		</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
