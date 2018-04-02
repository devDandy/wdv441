<?php 

	class BusinessObjectBase 
	{

		function load($recordToLoad) 
		{

		}

		function validate($dataArray) 
		{

		}

		function save($dataArray) 
		{

		}
	}

     error_reporting(E_ERROR | E_PARSE);
    include "Email.php";

    $first_name = '';
    $last_name = '';
    $email_address = '';
    $date_of_birth = '';
    $in_message = '';

    $honeypot = "";

    $first_name_error = '';
    $last_name_error = '';
    $email_address_error = '';
    $date_of_birth_error = '';
    $in_message_error = '';


    $displaySuccessOrFailure = '';
    $valid_form = false;

 //  if(isset($_POST['submitBtn'])) 
 //  {
 //    $first_name = test_input($_POST['inFirstName']);
 //    $last_name = test_input($_POST['inLastName']);
 //    $email_address = test_input($_POST['inEmailAddress']);
 //    $date_of_birth = test_input($_POST['inDateOfBirth']);
 //    $in_message = test_input($_POST['inMessage']);

 //    $honeypot = $_POST['preventBadGuys'];

 //        function validate_first_name($inName) 
 //        {
 //            global $valid_form, $first_name_error; // global variables
 //            $first_name_error = "";
            
 //            if(empty($inName)) 
 //            {
 //              $valid_form = false;
 //              $first_name_error = "First name is required.";
 //            }
 //        }//end validateName()

 //        function validate_last_name($inName) 
 //        {
 //            global $valid_form, $last_name_error; // global variables
 //            $last_name_error = "";
            
 //            if(empty($inName)) 
 //            {
 //              $valid_form = false;
 //              $last_name_error = "Last name is required.";
 //            }
 //        }//end validateName()

 //        function validate_email_address($inEmail)
 //        {
 //        	global $valid_form, $email_address_error;

 //        	//Wash away all those germs (gets rid of unnesscary special characters and stuff)
 //        	$sanitized_email = filter_var($inEmail, FILTER_SANITIZE_EMAIL);

 //        	$email_address_error = "";

 //        	if (empty($inEmail)) 
 //        	{
 //              $valid_form = false;
 //              $email_address_error = "Email Address is required.";
 //        	}
 //        	elseif (!filter_var($sanitized_email, FILTER_VALIDATE_EMAIL))
 //        	{
 //        		$valid_form = false; 
 //        		$email_address_error = "The email address you have entered is invalid.";
 //        	}
 //        }

 //        function validate_birth_date($in_birthday)
 //        {
 //        	global $valid_form, $date_of_birth_error;

 //        	$date_of_birth_error = "";

 //        	list($m, $d, $y) = explode('-', $in_birthday);

 //        	if (empty($in_birthday)) {
 //        		$valid_form	= false;
 //        		$date_of_birth_error = "Birth date is required.";
 //        	} 
 //        	elseif (!checkdate($m, $d, $y))
 //        	{
 //        		$valid_form	= false;
 //        		$date_of_birth_error = "Birthdate is invalid.";
 //        	}
 //        }

 //        function validate_message($in_message)
 //        {
 //        	global $valid_form, $in_message_error; 

 //        	$date_of_birth_error = "";

 //        	if (empty($in_message)) 
 //        	{
 //    			$valid_form = false;
 //    			$in_message_error = "Writing a message is required.";
 //        	}
 //        }

 //        function honeypot($inHoneypot) 
 //        {
 //        	if (!empty($inHoneypot))
 //        	 {
 //        		$valid_form = false; 
 //        	}
 //        }



 //      $valid_form = true; 

 //      validate_first_name($first_name);
 //      validate_last_name($last_name);
 //      validate_email_address($email_address);
 //      validate_birth_date($date_of_birth);
 //      validate_message($in_message);
 //      honeypot($honeypot);


 //      if ($valid_form) 
 //      {
 //      	$displaySuccessOrFailure = "Success";

 //      	// EMAIL TO CLIENT

 //        $timestamp = date('F j, Y, g:i a');
 //        $contactEmail = new Email("");  //instantiate
        
 //        $contactEmail->setRecipient("$email_address");
 //        $contactEmail->setSender($email_address);
 //        $contactEmail->setSubject("Advanced PHP Assignment 2");
 //        $contactEmail->setMessage(" First name: $first_name \n Last name: $last_name \n Email address: $email_address \n Date of birth: $date_of_birth \n Message: $in_message ");
 //        $emailStatus = $contactEmail->sendMail(); //create and send email

 //      } 
 //      else 
 //      {
 //      	$displaySuccessOrFailure = "Failure";

 //      }

	// }
      
 

	// Checks htmlspecialchars
     function test_input($data) 
     { 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
  
?>
