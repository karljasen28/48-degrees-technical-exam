<?php
require 'controller/getUserLogin.php';
require 'controller/getContact.php';
require 'controller/updateContact.php';
 
$user_id = $_SESSION['user_id'];
$con_info = contactId($_GET['id']);
$con_name = $con_info['name'];
$con_company = $con_info['company'];
$con_phone = $con_info['phone'];
$con_email = $con_info['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container col-lg-6 mt-5">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <div class="col">
                <h3>Update Contact</h3>
                </div>
                <div class="col" style="text-align: right !important;">
                    <a class="text-dark" href="contact.php">Contact</a> |
                    <a class="text-dark" href="controller/logout.php">Logout</a>
                </div>
            </div>
        </div>
        <form method="POST" action="<?php $_SELF_PHP ?>">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="<?php echo $con_name; ?>" required>
            </div>
            <div class="form-group">
                <label>Company</label>
                <input class="form-control" type="text" name="company" value="<?php echo $con_company; ?>" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" type="text" name="phone" value="<?php echo $con_phone; ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="<?php echo $con_email; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="updateContact" value="Submit">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>