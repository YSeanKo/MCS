<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->getThemePath()?>css/bootstrap.min v2.3.2.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath()?>css/prettify.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo $this->getThemePath()?>js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->getThemePath()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/prettify-1.0.css" rel="stylesheet">
    <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/base.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo $this->getThemePath()?>js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo $this->getThemePath()?>js/moment-with-locales.js"></script>
    <script src="<?php echo $this->getThemePath()?>js/bootstrap-datetimepicker.js"></script>
    <style>

        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            padding-top:70px;
            width:80%;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }

        .nav {
            padding: 15px 0;
        }

        .tab-content {
            padding-top: 21px;
            height:400px;
            width:80%;
        }
        #vehicle {
            width:100px;
        }
        #duty {
            width:120px;
        }
        #tab1 table th,td {
            text-align:center;
        }

        #tab4 table th,td {
            text-align:center;
        }

        #tab1 table .form-group {
            width:70%;
            margin-left:auto;
            margin-right:auto;

        }

        .nav-tabs {
            width:11%;
        }
        #tab2 .hover { background-color:#ddd }
        #tab2 .clicked { background-color:#C0C0C0 }
    </style>

</head>

<body style="padding-top: 70px; "cz-shortcut-listen="true" style="width:100%;">

<div class="container" id="page" style="width:100%;">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#262626">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $this->getThemePath()?>img/logoMini.png" alt="">
                </a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li style="float:left; padding-top:10px;color:#9d9d9d;">
                        <span>Welcome, Admin<br></span>
                        <span>System Administrator</span>
                    </li>
                    <li>
                        <a href="<?= $this->createUrl('/main/home')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= $this->createUrl('/main/profile')?>">Profile</a>
                    </li>
                    <li>
                        <a href="<?= $this->createUrl('/main/claim')?>">Apply for Claim</a>
                    </li>
                    <li>
                        <a href="<?= $this->createUrl('/main/status')?>">View Claim Status</a>
                    </li>
                    <li style="float:right;">
                        <a href="<?= $this->createUrl('/site/logout')?>">Logout</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="content">
        <?php echo $content; ?>
    </div>


</div><!-- page -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


<script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{(function() { for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }})()}catch(e){}</script></body></html>


</body>

<div class="footer" style="text-align:center;">
    Copyright &copy; <?php echo date('Y'); ?> by Cryptical Software Solutions. All Rights Reserved.<br/>
    <?php echo Yii::powered(); ?>
</div><!-- footer -->
</html>
