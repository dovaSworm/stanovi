<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="RdDesign">
    <meta name="keywords" content="Prodaja stanova direktno od investitora">
    <meta name="description" content="Prodaja stanova direktno od investitora">
    <title><?= esc($title) ?></title>
    <!-- <link rel="preload" as="font" href="./fonts/OpenSans-Regular.ttf" crossorigin="">
    <link rel="preload" as="style" href="./css/bootstrap.css" crossorigin="">
    <link rel="preload" as="font" href="./fonts/Chopin-Light.ttf" crossorigin="">
    <link rel="preload" as="script" href="./js/bootstrap.bundle.js" crossorigin="">
    <link rel="preload" as="script" href="./js/jquery-3.4.1.min.js" crossorigin="">
    <link rel="preload" as="script" href="./js/bootstrap.js" crossorigin="">
    <link rel="preload" as="script" href="./js/main.js" crossorigin=""> -->
    <link rel="canonical" href="https://doveden.com/">
    <!-- <link rel="apple-touch-icon" href="./images/logo.png"> -->
    <!-- <link rel="icon" type="image/png" href="https://nielgroup.rs/images/logo.png"> -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <!-- <link rel="stylesheet" media="screen and (min-width: 768px)" href="./css/desktop.min.css">
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="./css/mobile.min.css"> -->
</head>

<body>

    <header>
        <nav id="navbar" class="fixed-top">
            <div class="container flex align-items-center">
                <a href="#"><img src="<?php base_url(); ?>slike/malilogo.png" alt="Logo" /></a>

                <div class="nav-links">
                    <div class="link-h">
                        <a class="nav-link" href="#home">HOME</a>
                    </div>
                    <div class="link-h">
                        <a class="nav-link" href="#about">O meni</a>
                    </div>
                    <div class="link-h">
                        <a class="nav-link" href="#services"> Usluge</a>
                    </div>
                    <div class="link-h">
                        <a class="nav-link" href="#contact"> Kontakt</a>
                    </div>
                    <?php if ($this->session->userdata('logged_in')) : ?>
                    <div class="admin-linkovi d-flex justify-content-around">
                        <a title="Novi proizvod" class="nav-link" href="<?php echo base_url(); ?>products/create"><i
                                class="fas fa-plus-square"></i></a>
                        <a title="Izloguj se" class="nav-link" href="<?php echo base_url(); ?>users/logout"><i
                                class="fas fa-sign-out-alt"></i></a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="toggler">
                    <span class="tog-line"></span>
                    <span class="tog-line"></span>
                    <span class="tog-line"></span>
                </div>
            </div>
        </nav>
    </header>