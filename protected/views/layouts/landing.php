<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link  rel="stylesheet" href='<?php echo $this->getThemePath()?>css/bootstrap.min.css' >
    <link  rel="stylesheet" href="<?php echo $this->getThemePath()?>css/prettify.css">
    <!-- Custom styles for this template -->
    <link  rel="stylesheet" href='<?php echo $this->getThemePath()?>css/signin.css'>

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
            padding-top: 70px;
        }

        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

<div class="container" id="page">

    <div id="content">
        <?php echo $content; ?>
    </div>

    <div class="footer col-md-6 col-md-offset-3">
        Copyright &copy; <?php echo date('Y'); ?> by Cryptical Software Solutions. All Rights Reserved.<br/>
       <span class="col-md-3 col-md-offset-1"> <?php echo Yii::powered(); ?> </span>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>