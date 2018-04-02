<html>
    <body>
        <div>Users - <a href="/wdv441/week07/public_html/user/user-login.php">Create New User</a></div>        
        <div>
            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="GET">
                Search: 
                <select name="filterColumn">
                    <option value="username">Username</option>
                    <option value="password">Password</option>
                    <option value="userLevel">User Level</option>
                    <option value="articleContent">Article Content</option>                    
                </select>
                &nbsp;<input type="text" name="filterText"/>
                &nbsp;<input type="submit" name="filter" value="Search"/>
            </form>
        </div>
        <div>
            <div style="clear:both;">
                <div style="float:left; border:1px solid black;">Username</div> <div style="float:left; border:1px solid black;">Password</div>
                <div style="float:left; border:1px solid black;">User Level</div>
                <div style="float:left; border:1px solid black;">&nbsp;</div>
                <div style="float:left; border:1px solid black;">&nbsp;</div>
            </div>
            <?php foreach ($userList as $userRightsData) 
            { ?>
                <div style="clear:both;">
                    <div style="float:left; border:1px solid black;"><?php echo $userRightsData['username']; ?></div>
                    <div style="float:left; border:1px solid black;"><?php echo $userRightsData['password']; ?></div>
                    <div style="float:left; border:1px solid black;"><?php echo $userRightsData['userLevel']; ?></div>
                    <div style="float:left; border:1px solid black;"><a href="/wdv441/week07/public_html/user/user-edit.php?userID=<?php echo $userRightsData['userID']; ?>">Edit</a></div>
                    <div style="float:left; border:1px solid black;"><a href="/wdv441/week07/public_html/user/user-view.php?userID=<?php echo $userRightsData['userID']; ?>">View</a></div>
                </div>
            <?php } ?>                
            <br><br>
            <table border="1">
                <tr>
                    <th>Username&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleTitle&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleTitle&sortDirection=DESC">D</a></th>
                    <th>Password&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleAuthor&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleAuthor&sortDirection=DESC">D</a></th>
                    <th>User Level&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleDate&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=articleAuthor&sortDirection=DESC">D</a></th> 
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($userList as $userRightsData) 
                { ?>
                    <tr>
                        <td><?php echo $userRightsData['username']; ?></td>                
                        <td><?php echo $userRightsData['password']; ?></td>                
                        <td><?php echo $userRightsData['userLevel']; ?></td>
                        <td><a href="/wdv441/week07/public_html/user/user-edit.php?userID=<?php echo $userRightsData['userID']; ?>">Edit</a></td>
                        <td><a href="/wdv441/week07/public_html/user/user-view.php?userID=<?php echo $userRightsData['userID']; ?>">View</a></td>
                            
                    </tr>
                <?php } ?>                
            </table>
        </div>
    </body>
</html>