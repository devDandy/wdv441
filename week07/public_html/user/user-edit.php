<?php
// usage: http://localhost:8080/WDV441_2018/week05/public_html/article-edit.php?userID=1
// usage new: http://localhost:8080/WDV441_2018/week05/public_html/article-edit.php
require_once('../../inc/UserRights.class.php');

$userRights = new UserRights();

$userRightsDataArray = array();
$userErrorsArray = array();

// load the article if we have it
if (isset($_REQUEST['userID']) && $_REQUEST['userID'] > 0) 
{
    $userRights->load($_REQUEST['userID']);
    $userRightsDataArray = $userRights->userRightsData;
}

if (isset($_POST['Cancel'])) 
{
    header("location: article-list.php");
    exit;
}

// apply the data if we have new data
if (isset($_POST['Save']))
{
    $userRightsDataArray = $_POST;
    // sanitize
    $userRightsDataArray = $userRights->santinize($userRightsDataArray);
    $userRights->set($userRightsDataArray);
    
    // validate
    if ($userRights->validate())
    {
        // save
        if ($userRights->save())
        {
            header("location: article-save-success.php");
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

require_once('../../tpl/user/user-edit.tpl.php');
?>