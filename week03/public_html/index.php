<?php
	include '../inc/BusinessObjectBase.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Week 3 Assignment</title>
</head>
	<style type="text/css">
	.error {
		color: red;
	}
	.formResult {
		text-align: center;
		color:  blue;
	}
	</style>
<body>
	<h2>Signup Form</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<p>
		First Name:
		<div class="error">
			<?php echo $first_name_error ?>
		</div>
	</p> 
 		<input type="text" name="inFirstName" placeholder="John">

 	<p>
 		Last Name:
 		<div class="error" name="inLastNameError"><?php echo $last_name_error ?></div>
 	</p>
 		<input type="text" name="inLastName" placeholder="Doe">

 	<p>
 		Email Address:
 		<div class="error" name="inEmailError"><?php echo $email_address_error ?></div>
 	</p>
 		<input type="text" name="inEmailAddress" placeholder="johndoe@email.com">

 	<p>
 		Phone Number:
 		<div class="error" name="inDateOfBirthError"><?php echo $date_of_birth_error ?></div>
 	</p>
 		<input type="text" name="inDateOfBirth" placeholder="MM-DD-YYYY">

 	<p>
 		Password:
 		<div class="error" name="inDateOfBirthError"><?php echo $date_of_birth_error ?></div>
 	</p>
 		<input type="password" name="inDateOfBirth">

 	<p>
 		Confirm Password:
 		<div class="error" name="inDateOfBirthError"><?php echo $date_of_birth_error ?></div>
 	</p>
 		<input type="password" name="inDateOfBirth">


 	<br>
 	<br>
 	<input type="hidden" name="preventBadGuys">

 	<button name="submitBtn">Submit</button>
 	<button name="resetBtn">Reset</button>
</form>
	<h1 class="formResult"><?php echo $displaySuccessOrFailure; ?></h1>
</body>
</html>