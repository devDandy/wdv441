<?php
require_once('../../inc/UserRights.class.php');

$userRight = new UserRights();

$userList = $userRight->getList(
    (isset($_GET['sortColumn']) ? $_GET['sortColumn'] : null),
    (isset($_GET['sortDirection']) ? $_GET['sortDirection'] : null),
    (isset($_GET['filterColumn']) ? $_GET['filterColumn'] : null),
    (isset($_GET['filterText']) ? $_GET['filterText'] : null)
);

//var_dump($articleList);
require_once('../../tpl/user/user-list.tpl.php');

?>
