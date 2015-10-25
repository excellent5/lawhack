<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <script src="<?php echo base_url() ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jumbotron-narrow.css">
</head>
<body>
<div class="container">
<!--    <div class="header clearfix">-->
<!--        <nav>-->
<!--            <ul class="nav nav-pills pull-right">-->
<!--                <li role="presentation" class="active"><a href="showAllBill">Show Bill</a></li>-->
<!--                <li role="presentation"><a href="addBill">Add Bill</a></li>-->
<!--                <li role="presentation"><a href="showSettledBills">Settle Bill</a></li>-->
<!--                <li role="presentation" class="dropdown">-->
<!--                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
<!--                       aria-expanded="false">-->
<!--                        --><?php //echo $name ?><!-- <span class="caret"></span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="#">Change password</a></li>-->
<!--                        <li><a href="/index.php/user/logout">Log Out</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        <h3 class="text-muted">See your bill below</h3>-->
<!--    </div>-->
    <div class="col-md-8">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Last Modified Time</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    if(!empty($details)) {
                        foreach ($details as $docdetail) {
//                            printf("<tr class='clickable-row' data-href='url://editDoc/%d'>", $docdetail->id);
                            printf("<tr><td>%d</td><td><a href='editDoc/%d'>%s</a></td><td>%s</td></tr>",
                                $i, $docdetail->id, $docdetail->name, $docdetail->lasttime);
                            $i = $i + 1;
                        }
                    }
                    else{
                        echo "No doc record";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <a class="btn btn-lg btn-block btn-danger" onclick="createDoc()">Create New Document</a>
    </div>
</div>
<script type="text/javascript">
    function createDoc(){
        var name=prompt("Please type in the name","default");
        console.log(name);
        if (name!=null && name!=""){
            var form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("type", "post");
            form.setAttribute("action", "addDoc");

            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", name);
            form.appendChild(hiddenField);

            document.body.appendChild(form);
            form.submit();
        }
    }
</script>
</body>
</html>
