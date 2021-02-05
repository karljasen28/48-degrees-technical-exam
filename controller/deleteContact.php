<?php
function deleteContact($con_id) {
    $db = db();
    $sql = "DELETE FROM contacts WHERE con_id = ?";
    $cmd = $db->prepare($sql);
    $cmd->execute(array($con_id));
    $db = null;

    return "Delete Successfully";
}

if(isset($_POST['delete'])) {
    $con_id = $_POST['con_id'];
    $del_finish = deleteContact($con_id);
}
?>