<?php
    require 'controller/registration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container col-lg-6 border py-5 mt-5">
        <h3>Registration Form</h3>
        <form method="POST" action="<?php $_SELF_PHP ?>">
        <?php  
            if(!empty($pass_not_match)) {
        ?>
        <p class="alert alert-warning"><?php echo $pass_not_match ?></p>
        <?php } ?>

        <?php  
            if(!empty($email_exist)) {
        ?>
        <p class="alert alert-warning"><?php echo $email_exist ?></p>
        <?php } ?>

        <?php  
            if(!empty($reg_succ)) {
        ?>
        <p class="alert alert-success"><?php echo $reg_succ ?></p>
        <?php } ?>

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" id="pass1" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="confirm_password" id="pass2" required>
            </div>
            <div class="form-group">
                <a class="text-primary" href="index.php">Sign in here</a>
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="register" value="Submit">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>