<?php
require 'model/db.php';

    $session_id = $_SESSION['user_id'];

    function getUserLogin($session_id) {
        $db = db();
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($session_id));
        $row = $cmd->fetch();
        $db = null;

        return $row;
    }

    $user = getUserLogin($session_id);
    $name = $user['name'];
    

?>