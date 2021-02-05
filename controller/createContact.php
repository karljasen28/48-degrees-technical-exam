<?php
    function createContact($user_id, $name, $company, $phone, $email) {
        $db = db();
        $sql = "INSERT INTO contacts(user_id, name, company, phone, email) VALUES (?,?,?,?,?)";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($user_id, $name, $company, $phone, $email));
        $db = null;

        return header("location: contact.php");
    }

    if(isset($_POST['addcontact'])) {
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        createContact($user_id, $name, $company, $phone, $email);
    }
?>