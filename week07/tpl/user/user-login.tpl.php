
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
	<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
		<h1>User Login</h1>
            <?php if (isset($userErrorsArray['username']))                 
            { ?>
                <div><?php echo $userErrorsArray['username']; ?>
            <?php } ?>
		<p>Username:</p>
		<input type="text" name="username">
		<p>Password</p>
		<input type="password" name="password">
		<div>
			<input type="submit" name="Login" value="Login">
			<input type="reset" name="Cancel" value="Cancel">
		</div>
	</form>

	<h1>legend</h1>
	<p>Username: guest</p>
	<p>Password: guest</p>
</body>
</html>