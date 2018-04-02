<?php
session_start();
require_once('../../inc/UserRights.class.php');

$userRights = new UserRights();

$userDataArray = array();
$userErrorsArray = array();



// apply the data if we have new data
if (isset($_POST['Login']))
{
    $userRightsDataArray = $_POST;
    // sanitize
    $userRightsDataArray = $userRights->santinize($userRightsDataArray);
    $userRights->set($userRightsDataArray);

    $inUsername = $_POST["username"];
 	$inPassword = $_POST["password"];
    // validate
    if ($userRights->validate())
    {
        // verify
        	if ($userRights->checkLogin($inUsername, $inPassword)) {
	            header("location: user-login-success.php");
	            exit;
        	}

        else
        {
            $userErrorsArray[] = "Save failed";
        }
    }
    else
    {
        $userErrorsArray = $userRights->errors;
        $userRightsDataArray = $userRights->userRightsData;
    }
}

require_once("../../tpl/user/user-login.tpl.php");
?>