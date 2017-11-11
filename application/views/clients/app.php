<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="PPOB, Payment INM, Pay INM">

    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="<?php echo site_url($basepage . 'img/company-icon/icon.png') ?>" type="image/x-icon" />


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo site_url($basepage . 'css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url($basepage . 'css/pay-inm.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url($basepage . 'css/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url($basepage . 'css/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url($basepage . 'css/owl.theme.css'); ?>" rel="stylesheet">
</head>

<body>

<div id="all">
    <header>
        <?php echo $headers; ?>
    </header>

    <div id="contents">
        <?php echo $contents; ?>
    </div>

    <footer id="footer">
        <?php echo $footers;  ?>
    </footer>

</div>

<script src="<?php echo site_url($basepage . 'js/jquery-1.11.0.min.js'); ?>"></script>
<script src="<?php echo site_url($bootstrap . 'js/bootstrap.min.js'); ?>"></script>

<script src="<?php echo site_url($basepage . 'js/jquery.cookie.js'); ?>"></script>
<script src="<?php echo site_url($basepage . 'js/waypoints.min.js'); ?>"></script>
<script src="<?php echo site_url($basepage . 'js/jquery.counterup.min.js'); ?>"></script>
<script src="<?php echo site_url($basepage . 'js/jquery.parallax-1.1.3.js'); ?>"></script>
<script src="<?php echo site_url($basepage . 'js/front.js'); ?>"></script>
<script src="<?php echo site_url($basepage . 'js/owl.carousel.min.js'); ?>"></script>
</body>
</html>
