<?php 
var_dump($_SERVER);
	
	var_dump($_POST);

	$dataArray = $_POST;
	
	$dataArray = sanitizeInput($dataArray);

	$errorsArray  validateInput($dataArray);

	//sanatize
	function sanitizeInput($inputArray) 
	{
		$inputArray["firstName"] = filter_var($inputArray["firstName"], FILTER_SANITIZE_STRING);
		$inputArray["lastName"] = filter_var($inputArray["lastName"], FILTER_SANITIZE_STRING);

		return $sanitizeArray;
	}

	//validate 
	function validateInput($inputArray) 
	{
		if (empty($inputArray["firstName"])) 
		{
			$errorsArray["firstName"] = "First name is required.";
		}

		return $errorsArray;

	}

	//send email
	function sendEmail($sanitizeArray) 
	{
		return $success;
	}

	function echoValue($dataArray, $key) 
	{
		return (isset($dataArray[$key]) ? $dataArray[$key] : "");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Week 03</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		 First Name: <input type="text" name="firstName" ><br>
		 Last Name:  <input type="text" name="lastName"><br>
		 Email Address: <input type="email" name="emailAddress"><br>
		 Date of Birth: <input type="text" name="dateOfBirth"><br>
		 Message: <textarea name="message"></textarea> <br>
		 <input type="submit" name="btnSend" value="Send">
		 <input type="reset" name="reset">  
	</form>
</body>
</html>