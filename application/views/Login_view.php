<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/signin.css">
</head>
<body>
    <div class="container">
        <form class="form-signin" action="validateInfo" method="post">
        <h2 class="form-signin-heading">Legal template machine</h2>
<!--        <label for="inputEmail" class="sr-only">Email address</label>-->
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email"
               required autofocus>
<!--        <label for="inputPassword" class="sr-only">Password</label>-->
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"
               required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a class="btn btn-lg btn-block btn-danger" href="signup">Sign up</a>
        </form>
    </div>
    <?php
    if($auth==-1){
        echo "<script>alert('Invalid email or password')</script>";
    }
    ?>
</body>
</html>