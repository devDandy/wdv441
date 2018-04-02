<?php
//var_dump($_SERVER);

$isSuccess = isset($_GET['success']);

$dataArray = array();

if (isset($_POST['btnSend'])) 
{
    $dataArray = $_POST;
    
    //var_dump($dataArray);
    
    $dataArray = sanitizeInput($dataArray);

    $errorsArray = validateInput($dataArray);
    
    if (count($errorsArray) == 0) {
        if (!sendEmail($dataArray)) 
        {
            $errorsArray['btnSend'] = "Send Failed";
        } 
        else 
        {
            header("location: " . $_SERVER['SCRIPT_NAME'] . "?success");                
            exit;
        }        
    }    
}

// sanitize
function sanitizeInput($inputArray) 
{
    $inputArray['firstName'] = filter_var($inputArray['firstName'], FILTER_SANITIZE_STRING);
    $inputArray['lastName'] = filter_var($inputArray['lastName'], FILTER_SANITIZE_STRING);
    
    return $inputArray;
}

// validate
function validateInput($inputArray) 
{
    $errorsArray = array();



    if (empty($inputArray['firstName'])) 
    {
        $errorsArray['firstName'] = 'First Name is required';
        // var_dump("error 1");
    } 
    
    if (empty($inputArray['email'])) 
    {
        $errorsArray['email'] = 'Email is required';
        // var_dump("error 2");
    } 
    else
    {
        if (!filter_var($inputArray['email'], FILTER_VALIDATE_EMAIL))
        {
            $errorsArray['email'] = "Email is not a valid format (test@test.com)";
            // var_dump("error 3");
        }
    }
    
    return $errorsArray;
} 

// send email
function sendEmail($sanitizedArray) 
{
    // quick message
    $message = "thank you for contacting" . PHP_EOL . PHP_EOL;
    foreach ($sanitizedArray as $key => $value) 
    {
        $message .= $key . ": " . $value . PHP_EOL;
        var_dump($key, $value, "----");
    }
    
    var_dump($message);die;
    
    $sendSuccess = mail("dschnd@gmail.com" , "test message", $message);
    
    return $sendSuccess;
}

function echoValue($dataArray, $key) 
{
    return (isset($dataArray[$key]) ? $dataArray[$key] : '');
}
?>
<html>
    <body>
        <?php if ($isSuccess) 
        { ?>
            <div class="successMessage">yay!</div>
        <?php } 
        else 
        { ?>
            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                <?php if (isset($errorsArray['btnSend'])) 
                { ?>
                    <div class="errors"><?php echo echoValue($errorsArray, 'btnSend'); ?></div>
                <?php } ?>
                <?php if (isset($errorsArray['firstName'])) 
                { ?>
                    <div class="errors"><?php echo echoValue($errorsArray, 'firstName'); ?></div>
                <?php } ?>
                First Name: <input type="text" name="firstName" value="<?php echo echoValue($dataArray, 'firstName'); ?>"/><br>
                Last Name: <input type="text" name="lastName" value="<?php echo echoValue($dataArray, 'lastName'); ?>"/><br>
                DOB: <input type="text" name="dob" value="<?php echo echoValue($dataArray, 'dob'); ?>"/><br>
                <?php if (isset($errorsArray['email'])) 
                { ?>
                    <div class="errors"><?php echo echoValue($errorsArray, 'email'); ?></div>
                <?php } ?>
                Email: <input type="text" name="email" value="<?php echo echoValue($dataArray, 'email'); ?>"/><br>
                Message: <textarea name="message"><?php echo echoValue($dataArray, 'message'); ?></textarea><br>
                <input type="submit" name="btnSend" value="Send"/>

            </form>
        
        <?php } ?>
    </body>
</html>