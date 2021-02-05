<?php
    function updateContact($name, $company, $phone, $email, $con_id) {
        $db = db();
        $sql = "UPDATE contacts SET name = ?, company = ?, phone = ?, email = ? WHERE con_id = ?";
        $cmd = $db->prepare($sql);
        $cmd->execute(array($name, $company, $phone, $email, $con_id));
        $db = null;

        return header("location: contact.php");
    }

    if(isset($_POST['updateContact'])) {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $con_id = $_GET['id'];

        updateContact($name, $company, $phone, $email, $con_id);
    }
?>