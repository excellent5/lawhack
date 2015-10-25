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
            var um = UM.getEditor('container', {
                toolbar: ['undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
                    'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
                    '| justifyleft justifycenter justifyright justifyjustify |',
                    'link unlink ']
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url() ?>/FileSaver.min.js"></script>


    <style type="text/css">
    h1{
    font-family: "微软雅黑";
    font-weight: normal;
    }
    .btn {
    display: inline-block;
    *display: inline;
    padding: 4px 12px;
    margin-bottom: 0;
    *margin-left: .3em;
    font-size: 14px;
    line-height: 20px;
    color: #333333;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    cursor: pointer;
    background-color: #f5f5f5;
    *background-color: #e6e6e6;
    background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
    background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
    background-repeat: repeat-x;
    border: 1px solid #cccccc;
    *border: 0;
    border-color: #e6e6e6 #e6e6e6 #bfbfbf;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border-bottom-color: #b3b3b3;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    *zoom: 1;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .btn:hover,
    .btn:focus,
    .btn:active,
    .btn.active,
    .btn.disabled,
    .btn[disabled] {
    color: #333333;
    background-color: #e6e6e6;
    *background-color: #d9d9d9;
    }

    .btn:active,
    .btn.active {
    background-color: #cccccc \9;
    }

    .btn:first-child {
    *margin-left: 0;
    }

    .btn:hover,
    .btn:focus {
    color: #333333;
    text-decoration: none;
    background-position: 0 -15px;
    -webkit-transition: background-position 0.1s linear;
    -moz-transition: background-position 0.1s linear;
    -o-transition: background-position 0.1s linear;
    transition: background-position 0.1s linear;
    }

    .btn:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
    }

    .btn.active,
    .btn:active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .btn.disabled,
    .btn[disabled] {
    cursor: default;
    background-image: none;
    opacity: 0.65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    }
    </style>

</head>
<body>

<!--<form>-->
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
                            <option>Promissory Note</option>
                        </select></div>
                </div>
                <div class="row" style="padding-bottom:15px">
                    <div class="col-md-5">Terms:</div>
                    <div class="col-md-7"><select class="selectpicker" id="paymentstype" onchange="changeListener()">
                            <option>Revolving Credit</option>
                            <option>Fixed/Monthly</option>
                            <option>Fixed/Quarterly</option>
                            <option>CDFI/Quarterly</option>
                        </select></div>
                </div>
                <div class="row" style="padding-bottom:15px">
                    <div class="col-md-5">Representations and Warranties:</div>
                    <div class="col-md-7"><select class="selectpicker" id="represent" onchange="changeListener()">
                            <option>Hotel/Favor Lender</option>
                            <option>Hotel/Favor Borrower</option>
                            <option>Commercial Real Estate</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col-md-5">Miscellaneous:</div>
                    <div class="col-md-7"><select class="selectpicker" id="Miscellaneous" onchange="changeListener()">
                            <option>Real Estate/California</option>
                            <option>Real Estate/New York</option>
                        </select></div>
                </div>
                <div class="row">
                    Affirmative Covenants:</br>
                    Negative Covenants:</br>
                    Defaults and Remedies:
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-7">
                <script id="container" name="content" type="text/plain" style="width:700px;height:400px;"><?php echo $text?></script>
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
<!--</form>-->
<script type="text/javascript">

    function submitForm() {
        var documenttype = document.getElementById("documenttype").value;
        var paymentstype = document.getElementById("paymentstype").value;
        var represent = document.getElementById("represent").value;
        var Miscellaneous = document.getElementById("Miscellaneous").value;
    }
    function changeListener(){
        console.log("enter");
        var documenttype = document.getElementById("documenttype").value;
        var paymentstype = document.getElementById("paymentstype").value;
        var represent = document.getElementById("represent").value;
        var Miscellaneous = document.getElementById("Miscellaneous").value;
        $.post( "https://api.havenondemand.com/1/api/sync/findsimilar/v1",{"apikey":"c7adda60-9d70-4c88-8327-7e5db4cbe9dd","indexes":"contract","print":"all","text":documenttype+paymentstype+represent+Miscellaneous} ,function( data ) {
        var dataobj = data;
        var text = dataobj.documents[0].content;
            console.log(text);
        UM.getEditor('container').setContent(text,false);
    });

    }
</script>




<script type="text/javascript">
    
    function updateDoc(){
        alert("Document saved");
    }

    function getHtmlContent(){
        var content = UM.getEditor('container').getContent();
        var blob = new Blob([content], {type: "text/plain"});
        saveAs(blob, "try.html");
    }

</script>

<div class="clear"></div>

</body>
</html>