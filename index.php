<?php
    require 'controller/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container col-lg-6 border py-5 mt-5">
    <h3>Sign in</h3>
        <form method="POST" action="<?php $_SELF_PHP ?>">
        <?php  
            if(!empty($user_not_found)) {
        ?>
        <p class="alert alert-warning"><?php echo $user_not_found ?></p>
        <?php } ?>
            <div class="form-group">
                <label>Email Address</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="form-group">
                <a class="text-primary" href="register.php">Register here</a>
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="login" value="Submit">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>