<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.wrapper {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.wrapper form {
			display: flex;
			flex-direction: column;
			align-items: center;
			border: 1px solid;
			padding: 20px 50px;
		}

		form input {
			margin-bottom: 10px;
			padding: 5px 10px;
			border-radius: 5px;
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<form method="POST">
			<input type="text" name="login" placeholder="Login" required="">
			<input type="password" name="password" placeholder="Password" required="">
			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>