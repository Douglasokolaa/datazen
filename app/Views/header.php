<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="navTitle" content="learn">
    <title><?php echo $title ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../images/datazen/fav_icon.png" />
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" href="../../revslider/css/rs6.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="../../css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../css/sofbox-style.css">
    <link rel="stylesheet" href="../../css/datazen.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Responsive -->
    <link rel="stylesheet" href="../../css/responsive.css">
</head>

<body>
    <!-- Header -->
    <!-- <div id="header"></div> -->
    <div>
        <header id="main-header" class="org-menu" style="background-color: white">
            <div class="ml-4 mr-4">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="<?php echo base_url('/') ?>">
                                <img class="img-fluid" src="../../images/datazen/data-zen-logo.png" alt="img">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-btn" id="menu-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                                <span class="ion-navicon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto justify-content-end" id="nav-ul" style="width: 98%;">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('/dashboard') ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../about.html">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../products.html">Products & Solutions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../programs.html">Programs</a>
                                    </li> -->
                                    <?php if (is_logged_in()) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link  <?php if (service('uri')->getSegment(1) != 'dashboard') echo 'active' ?>" href="<?php echo base_url('/profile') ?>">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('/logout') ?>">Logout</a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if (service('uri')->getSegment(1) != 'register') echo 'active' ?>" href="<?php echo base_url('/register') ?>">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  <?php if (service('uri')->getSegment(1) != 'login') echo 'active' ?>" href="<?php echo base_url('/login') ?>">Login</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Header End -->
    <nav aria-label="breadcrumb" style="padding-top: 70px;">
        <?php if (is_logged_in() && service('uri')->getSegment(1) != 'dashboard') { ?>
            <ol class="breadcrumb">
                <div class="container" style="padding: 0;">
                    <li><a class="learn-links orange-text" href="<?php echo base_url('/dashboard') ?>">Learn </a></li>
                    <li aria-current="page">/ <?php echo $title ?> </li>
                    <?php if (isset($progress) && $progress['value'] > 0) { ?>
                        <div class="progress mt-2" style="height:30px;">
                            <div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% progress</div>
                        </div>
                    <?php } ?>
                </div>
            </ol>

        <?php } ?>
    </nav>

    <!-- <div class="text-left iq-breadcrumb-one iq-bg-over black banner-images parallax"
        style="background-image: url(../../images/learn.jpg)">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <h1 style="color: #ffff;">Learn relevant skills</h1>

                </div>
                <div class="col-md-6">
                </div>

            </div>
        </div>
    </div> -->