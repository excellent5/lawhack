<!DOCTYPE HTML>
<html>
<head>
    <!--bootstrap css and js-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/select/dist/css/bootstrap-select.css">
    <script src="<?php echo base_url()?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/select/dist/js/bootstrap-select.js"></script>

    <!--umeditor css and js-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>/themes/default/css/umeditor.css">
    <!--    <script src="--><?php //echo base_url() ?><!--/third-party/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>/umeditor.config.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/umeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/lang/en/en.js"></script>
    <script type="text/javascript">
        $(function(){
            window.um = UM.getEditor('container', {
                toolbar: ['undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
                    'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
                    '| justifyleft justifycenter justifyright justifyjustify |',
                    'link unlink ']
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url() ?>/FileSaver.min.js"></script>

</head>
<body>

<form>
    <div class="container">
        <div class="row" style="padding-bottom:15px">
            <div class="header clearfix" style="padding-left:15px">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active" style="padding-top:15px"><a href="/lawhack/index.php/user/logout">Log out</a></li>
                    </ul>
                </nav>
                <h1>Legal template machine</h1>
            </div>


        </div>
        <div class = "row">
            <div class="col-md-4">
                <div class="row" style="padding-bottom:15px">
                    <div class="col-md-5">type of document:</div>
                    <div class="col-md-7"><select class="selectpicker" id="documenttype" onchange="changeListener()">
                            <option>Loan Agreement</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select></div>
                </div>
                <div class="row" style="padding-bottom:15px">
                    <div class="col-md-5">type of real estate:</div>
                    <div class="col-md-7"><select class="selectpicker" id="estatetype" onchange="changeListener()">
                            <option>Loan Agreement</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select></div>
                </div>
                <div class="row" style="padding-bottom:15px">
                    <div class="col-md-5">state:</div>
                    <div class="col-md-7"><select class="selectpicker" id="location" onchange="changeListener()">
                            <option>Loan Agreement</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col-md-5">loaner ot borrower:</div>
                    <div class="col-md-7"><select class="selectpicker" id="ifloaner" onchange="changeListener()">
                            <option>Loan Agreement</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select></div>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-7">
                <script id="container" name="content" type="text/plain" style="width:700px;height:400px;"></script>
            </div>
            <div class="row">
                <ul class="nav navbar-nav navbar-right" style="padding-top:15px">
                    <li><button class="btn" onclick="updateDoc()">save</button></li>
                    <li><button class="btn" onclick="getHtmlContent()" style="margin-left:15px">download</button></li>
            </div>
        </div>
    </div>

    <!--<div class="col-md-2 col-md-offset-5">-->
    <!--<button class="btn btn-default" onclick="submitForm()">create a template</button>-->
    <!--</div>-->
</form>
<script type="text/javascript">

    function submitForm() {
        var documenttype = document.getElementById("documenttype").value;
        var estatetype = document.getElementById("estatetype").value;
        var location = document.getElementById("location").value;
        var ifloaner = document.getElementById("ifloaner").value;
    }
    function changeListener(){
        var documenttype = document.getElementById("documenttype").value;
        var estatetype = document.getElementById("estatetype").value;
        var location = document.getElementById("location").value;
        var ifloaner = document.getElementById("ifloaner").value;
        $.post( "test.php", { "documenttype": documenttype, "estatetype": estatetype,"location":location,"ifloaner":ifloaner},function(data){

        });

    }
</script>




<script type="text/javascript">

    function updateDoc(){
        var content = UM.getEditor('editor').getContent();
//        UM.getEditor('editor').sync('editor');
        $.post("updateDoc", {"docid": docid, "text": content}, function (data) {
            console.log("post it");
        });
    }

    function getHtmlContent(){
        var content = UM.getEditor('container').getContent();
        var blob = new Blob([content], {type: "text/plain;charset=utf-8"});
        saveAs(blob, "try.doc");
    }

</script>

<div class="clear"></div>

</body>
</html>