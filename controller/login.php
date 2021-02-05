<?php
    require 'model/db.php';

    function login($email, $password) {
        $db = db();
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($email, $password));
        $row = $cmd->fetch(PDO::FETCH_ASSOC);
        $db = null;

        return $row;
    }


    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $row = login($email, $password);

        if($row > 0) {
            $_SESSION['user_id'] = $row["user_id"];
            header("location: contact.php");
        } else {
            $user_not_found = "Account not found";
        }
    }
?>