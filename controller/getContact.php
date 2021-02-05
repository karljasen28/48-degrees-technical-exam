<?php
    
    function getContact($user_id) {
        $db = db();
        $sql = "SELECT * FROM contacts WHERE user_id = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($user_id));
        $row = $cmd->fetchAll();
        $db = null;

        return $row;
    }

    function contactId($contact_id) {
        $db = db();
        $sql = "SELECT * FROM contacts WHERE con_id = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($contact_id));
        $row = $cmd->fetch();
        $db = null;

        return $row;
    }

?>