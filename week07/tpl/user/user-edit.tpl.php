<html>
    <body>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
            <?php if (isset($userErrorsArray['username']))                 
            { ?>
                <div><?php echo $userErrorsArray['username']; ?>
            <?php } ?>
            Username: <input type="text" name="username" value="<?php echo (isset($userRightsDataArray['username']) ? $userRightsDataArray['username'] : ''); ?>"/><br>
            password: <input type="password" name="password" value="<?php echo (isset($userRightsDataArray['password']) ? $userRightsDataArray['password'] : ''); ?>"/><br>
            User Level: <input type="text" name="userLevel" value="<?php echo (isset($userRightsDataArray['userLevel']) ? $userRightsDataArray['userLevel'] : ''); ?>"/><br>
            <input type="hidden" name="userID" value="<?php echo (isset($userRightsDataArray['userID']) ? $userRightsDataArray['userID'] : ''); ?>"/>
            <input type="submit" name="Save" value="Save"/>
            <input type="submit" name="Cancel" value="Cancel"/>            
        </form>        
    </body>
</html>