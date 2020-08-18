<?php
$appVersion = "1.1.2";

$pagename = strtolower(basename($_SERVER['PHP_SELF']));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
   
    <title>Alternative Access Funds, LLC</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="theme-color" content="#112140">
    <meta name="msapplication-navbutton-color" content="#112140">
    <meta name="apple-mobile-web-app-status-bar-style" content="#112140">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <link href="css-altac/app.css?v=<?php echo $appVersion ?>" rel="stylesheet">
    <script> </script>

    <style>
        
    </style>
</head>

<body class="page-load <?php echo ($pagename=='index.php' || $pagename=='')?'home-page':'inner-page'; ?>">
    <!--[if lte IE 11]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
  <main class="wrapper clearfix">
        <header class="header-main clearfix compensate-for-scrollbar">
            <div class="container">
                <div class="header-outer">
                    <div class="row align-items-center">
                        <div class="col d-none d-lg-flex">
                            <ul class="social-links d-flex align-items-center list-unstyled">
                                <li><a href="javascript:void(0)"><i class="icon-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="icon-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="./" class="brand">
                                <img src="images-altac/logo.svg" alt="ALTAC">
                            </a>
                        </div>
                        <div class="col text-right">
                           <?php if($pagename == "index.php" || $pagename == "") { ?>
                                  <a data-scrollto="contact" href="javascript:void(0)" class="btn btn-primary">CONTACT US</a>
                           <?php } else { ?>
                                  <a class="btn btn-primary" href="./#contact">CONTACT US</a>
                           <?php } ?>
                        </div>
                    </div>    
                </div>            
            </div>            
        </header>       