<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <script src="<?php echo base_url()?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/js/validator.js">
<!--    <script>-->
<!--        $('#myform').on('submit',function(){-->
<!--            if($('#inputPasssword3').val()!=$('#inputConfirmPassword3').val()){-->
<!--                alert('Password not matches');-->
<!--                return false;-->
<!--            }-->
<!--            return true;-->
<!--        });-->
<!--    </script>-->
</head>
<body>
    <div class="container">
        <div class="col-md-offset-2 col-md-8">
            <div class="page-header">
                <h1>Create your account <small class="col-md-offset-2">It's free and convenient</small></h1>
            </div>
            <form class="form-horizontal" action="addUser" method="post" id="myform">
                <div class="form-group">
                    <label for="inputName3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName3" placeholder="Name"
                               name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email"
                               name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password"
                               name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword3" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10" style="margin-top: 10px">
                        <input type="password" class="form-control" id="inputConfirmPassword3"
                               placeholder="Confirm Password" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>