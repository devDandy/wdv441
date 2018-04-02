<?php

class UserLogin
{

	protected $username;
	protected $userPassword;
	protected $userEmail;

	function getUsername() 
	{
		return $this->$username;
	}
	function getUserPassword() 
	{
		return $this->$userPassword;
	}
	function getUserEmail() 
	{
		return $this->$getUserEmail;
	}

  function loadTableData($tableData, $key, $keyField) 
  {
	return $tableData;
  }

  function validateTableData($tableData, $key, $keyField) 
  {
	return $sanitizedTableData;
  }

  function saveTableData($sanitizedTableData) 
  {
	return $database;
  }
}﻿
// I believe I'm not supposed to define subclasses within the foundation class file?
class userDanSchneider96 extends UserLogin
{
	$username-> "DanSchneider96";
	$userPassword-> "123c@ntSeeMe";
	$userEmail-> "dan@domain.com";

	loadTableData("UserLoginTable", $username, $usernameField);
	validateTableData($tableData, $username, $usernameField);
	saveTableData($sanitizedTableData);

	loadTableData("UserLoginTable", $userPassword, $userPasswordField);
	validateTableData($tableData, $userPassword, $userPasswordField);
	saveTableData($sanitizedTableData);

	loadTableData("UserLoginTable", $userEmail, $userEmailField);
	validateTableData($tableData, $userEmail, $userEmailField);
	saveTableData($sanitizedTableData);
	// Repeat with other fields

}

?>