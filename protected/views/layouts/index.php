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
    <link href="<?php echo $this->getThemePath()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath()?>css/prettify.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

     body {

        }

     html {
         position: relative;
         min-height: 100%;
     }
     body {
         /* Margin bottom by footer height */
         margin-bottom: 60px;
         padding-top:70px;
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

     .marquee h1{
         -webkit-animation: announcement 20s;  /* Chrome, Safari, Opera */
         -webkit-animation-iteration-count: 1;  /* Chrome, Safari, Opera */
         -webkit-animation-fill-mode: backwards;  /* Chrome, Safari, Opera */
         animation: announcement 20s;
         animation-iteration-count: 1;
         animation-fill-mode: backwards;
     }

     @keyframes announcement {
         0%	{
             transform:translateX(100%);
         }
         10% {
             transform:translateX(0);
         }
         40% {
             transform:translateX(0);
         }
     }
    </style>

</head>

<body>

<div class="container" id="page">
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
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="claim.html">Apply for Claim</a>
                    </li>
                    <li>
                        <a href="status.html">View Claim Status</a>
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
