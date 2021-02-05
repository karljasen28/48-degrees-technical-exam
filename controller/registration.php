<?php
    require 'model/db.php';

    function register($name, $email, $password) {
        $db = db();
        $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($name, $email, $password));
        $db = null;

        return "Thank you for registering";
    }

    function verifyEmail($email) {
        $db = db();
        $sql = "SELECT * FROM users WHERE email = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($email));
        $row = $cmd->fetch();
        $db = null;

        return $row;
    }



    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $con_pass = $_POST['confirm_password'];

        $val_email = verifyEmail($email);
        $check_email = $val_email['email'];

        if($con_pass !== $password) {
            $pass_not_match = "Password does not match!";
        } elseif ($check_email == $email) {
            $email_exist = "Email Already Exist!";
        }
        else {
            $reg_succ = register($name, $email, md5($password));
        }
        
    }
?>