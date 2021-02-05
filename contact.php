<?php
require 'controller/getUserLogin.php';
require 'controller/getContact.php';
require 'controller/deleteContact.php';

$user_id = $_SESSION['user_id'];
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
    <div class="container col-lg-8 mt-5 border">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <div class="col">
                <h3>Contact</h3>
                </div>
                <div class="col" style="text-align: right !important;">
                    <div class="row">
                        <div class="col">
                            <a class="text-dark" href="addcontact.php">Add Contact</a> |
                            <a class="text-primary" href="contact.php">Contact</a> |
                            <a class="text-dark" href="controller/logout.php">Logout</a>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Search..." style="border-radius: 25px;padding: 3px 25px;margin-right: -30px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  
            if(!empty($del_finish)) {
        ?>
        <p class="alert alert-warning"><?php echo $del_finish ?></p>
        <?php } ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">COMPANY</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">EMAIL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach(getContact($user_id) as $contactUsers) {?>
                <tr>
                    <td><?php echo $contactUsers['name']; ?></td>
                    <td><?php echo $contactUsers['company']; ?></td>
                    <td><?php echo $contactUsers['phone']; ?></td>
                    <td><?php echo $contactUsers['email']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="updateContact.php?id=<?php echo $contactUsers['con_id']; ?>">Edit</a>
                        <form method="POST" action="<?php $_SELF_PHP ?>">
                        <input type="text" name="con_id" value="<?php echo $contactUsers['con_id']; ?>" hidden>
                            <button class="btn btn-danger" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>