<?php session_start();?>

<html>
	<head>
		<title>sessions, gets, posts</title>
	</head>
		<body>

			<form method = "post" action = 'session.php'>

			<input type = 'text' name = 'first_name'>

			<input type = 'text' name = 'last_name'>

			<input type = 'submit'>

			</form>

			<a href = "session_test.html"></a>

		</body>
</html>