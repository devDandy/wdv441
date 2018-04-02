<?php

class UserRights 
{
	var $userRightsData = array();
	var $errors = array();

	var $db = null;

	function __construct() 
	{
	    $this->db = new PDO('mysql:host=localhost;dbname=wdv441_2018;charset=utf8', 'root', 'wdv4412018');        
	}

	function set($dataArray) 
	{
		$this->userRightsData = $dataArray;
	}

    function santinize($dataArray)
    {
        // sanitize data based on rules
        
        return $dataArray;
    }

    function load($userID)
    {
        $isLoaded = false;

        // load from database                
        $stmt = $this->db->prepare("SELECT * FROM userrights WHERE userID=?");
        $stmt->execute(array($userID));

        if ($stmt->rowCount() == 1) 
        {
            $dataArray = $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($dataArray);
            $this->set($dataArray);
            
            $isLoaded = true;
        }
        
        //var_dump($stmt->rowCount());
                
        return $isLoaded;
    }

    function save() 
    {
        $isSaved = false;
        
        // determine if insert or update based on articleID
        // save data from userRightsData property to database
        if (empty($this->userRightsData['userID']))
        {
            $stmt = $this->db->prepare(
                "INSERT INTO userrights 
                    (username, password ) 
                 VALUES (?, ? )");
               
            $isSaved = $stmt->execute(array(
                    $this->userRightsData['username'],
                    $this->userRightsData['password'],
                )
            );
            
            if ($isSaved) 
            {
                $this->userRightsData['userID'] = $this->db->lastInsertId();
            }
        } 
        else 
        {
            $stmt = $this->db->prepare(
                "UPDATE userrights SET 
                    username = ?,
                    password = ?
                WHERE userID = ?"
            );
                    
            $isSaved = $stmt->execute(array(
                    $this->userRightsData['username'],
                    $this->userRightsData['password'],
                    $this->userRightsData['userID']
                )
            );            
        }
                        
        return $isSaved;
    }

	function checkLogin($username, $password) 
    {
    	$userID = "";
    	$checkUsers = "SELECT userID, username, password, userLevel FROM userrights WHERE username = :username AND password = :password";
    	$query = $this->db->prepare($checkUsers);
    	$query->bindParam('username', $username, PDO::PARAM_STR);
    	$query->bindParam('password', $password, PDO::PARAM_STR);
    	$query->execute();
    	$count = $query->rowCount();
    	$rows = $query->fetch(PDO::FETCH_ASSOC);

    	if ($rows!=false) {
    		$userID = $rows["userID"];
    	}
    	echo $userID;
    	return $userID;
	}


    function validate()
    {
        $isValid = true;
        
        // if an error, store to errors using column name as key
        
        // validate the data elements in userRightsData property
        if (empty($this->userRightsData['username']))
        {
            $this->errors['username'] = "Please enter a username";
            $isValid = false;
        }        
                        
        return $isValid;
    }

    function getList($sortColumn = null, $sortDirection = null, $filterColumn = null, $filterText = null)
    {
        $userList = array();
        
        $sql = "SELECT * FROM userrights ";

        if (!is_null($filterColumn) && !is_null($filterText)) 
        {
            $sql .= " WHERE " . $filterColumn . " LIKE ?";
        }
        
        if (!is_null($sortColumn)) 
        {
            $sql .= " ORDER BY " . $sortColumn;
            
            if (!is_null($sortDirection))
            {
                $sql .= " " . $sortDirection;
            }
        }
        
        $stmt = $this->db->prepare($sql);
        
        if ($stmt)
        {
            $stmt->execute(array('%' . $filterText . '%'));
            
            $userList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
                
        return $userList;        
    }


}





?>