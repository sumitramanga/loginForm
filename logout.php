<?php
	session_start();

	// Display for testing purposes
	echo($_SESSION['username']);
	// Removes all session variables
	unset($_SESSION['username']);

	echo('You have cleaned the session');

	// Wait 2 seconds to get bck ot the login page
	header('Refresh:2; URL=index.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>You have been logged out</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body class="container logoutBG">
	 <!-- <div class="cotainer logoutBG"></div> -->
	 <div class="logoutContent">
		 <h1>You have been logged out</h1>
		 <h5>Please wait a few moments while we redirect you back to the login page.</h5>
	 </div>


 </body>
 </html>
