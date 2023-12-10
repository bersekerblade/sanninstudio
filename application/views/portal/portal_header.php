<!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="SANNIN,Studio,Kota Batu">
    <meta name="author" content="Sannin Studio Operation Team">
    <title>Sannin Studio</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/icon-sannin.png">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/portal/'); ?>css/style.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/portal/'); ?>css/portal.css" rel="stylesheet">
</head>

<body>

    <div class="header-global">
        <div class="container">
            <div class="header-global__pc pt-2">
                <div class="d-flex justify-content-start align-items-end">
                    <a href="<?= base_url('portal'); ?>"><img src="/assets/img/logo-sannin.png" alt="Sannin Studio logo"></a>
                    <!-- <h1>title text sannin</h1> -->
                </div>
                <div class="header-global__pc--menu">
                    <div class="header-global__pc--menu__user">
                        <a href="<?= base_url('auth'); ?>">Login</a> / <a href="<?= base_url('auth/registration'); ?>">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu toogle start  -->
        <div class="header-global__sp">
            <div class="container-fluid">
                <div class="header-global__sp--content">
                    <h1><a href="#"><img src="/assets/img/logo-sannin.png" alt="Sannin Studio logo" style="width: 50px;"></a></h1>
                    <div class="header-global__sp--content__hamburger">
                        <a id="sidebar-left-trigger" href="#"><svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                            </svg><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com --></a>
                    </div>
                    <div class="header-global__sp--content__menu">
                        <p><a href="#">Login</a> | <a href="#">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu toogle end  -->
    </div>
    <!-- main container start  -->
    <nav class="nav-global">
        <div class="container">
            <ul class="nav-global__list d-flex align-items-center justify-content-between">
                <li class="nav-global__item"><a href="<?= base_url('portal'); ?>">NEWS</a></li>
                <li class="nav-global__item"><a href="#">CLIENT</a></li>
                <li class="nav-global__item"><a href="<?= base_url('portal/staff'); ?>">STAFF</a></li>
                <li class="nav-global__item"><a href="#">ABOUT US</a></li>
            </ul>
        </div>
    </nav>
    <!-- main container end  -->

    <!-- side container start  -->
    <div class="container">
        <div class="nav-breadcrumb">
            <ol class="nav-breadcrumb__list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li class="nav-breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemtype="#" itemprop="item" href="<?= base_url('portal/home'); ?>">
                        <span itemprop="name"><svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                            </svg> Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>