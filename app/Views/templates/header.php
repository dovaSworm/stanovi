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
    <!-- <link rel="preload" as="style" href="./css/bootstrap.min.css" crossorigin=""> -->
    <!-- <link rel="preload" as="font" href="./fonts/OpenSans-Regular.ttf" crossorigin="">
    <link rel="preload" as="font" href="./fonts/Chopin-Light.ttf" crossorigin="">
    <link rel="preload" as="script" href="./js/jquery-3.4.1.min.js" crossorigin="">
    <link rel="preload" as="script" href="./js/bootstrap.js" crossorigin="">
    <link rel="preload" as="script" href="./js/main.js" crossorigin=""> -->
    <link rel="preload" as="script" href="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"
        crossorigin="anonymous" />
    <link rel="canonical" href="https://termometalnovogradnja.rs">
    <link href="<?php echo base_url(); ?>fontawesome-free-6.5.1-web/css/fontawesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>fontawesome-free-6.5.1-web/css/brands.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>fontawesome-free-6.5.1-web/css/solid.css" rel="stylesheet" />
    <!-- <link rel="apple-touch-icon" href="./images/logo.png"> -->
    <!-- <link rel="icon" type="image/png" href="https://nielgroup.rs/images/logo.png"> -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/app.css">
    <!-- <link rel="stylesheet" media="screen and (min-width: 768px)" href="./css/desktop.min.css">
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="./css/mobile.min.css"> -->
</head>

<body>

    <header>
        <nav id="navbar" class="fixed-top">
            <div class="container d-flex align-items-center">
                <a href="#"><img src="slike/logo.png" alt="Logo" /></a>
                <div class="phone">
                    <a href="tel:+38163557528"><i class="fas fa-mobile-alt"></i>+38163557528</a>
                </div>
                <div class="nav-links">
                    <div class="link-h">
                        <a class="" href="<?php echo base_url(); ?>#">Početna</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo base_url(); ?>#about">O nama</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo base_url(); ?>projects#projects">Projekti</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo base_url(); ?>#stanovi">Stanovi</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="#contact">Kontakt</a>
                    </div>
                    <?php if (session()->get('user')) : ?>
                        <div class="link-h">
                            <a title="Novi proizvod" class="" href="<?php echo base_url(); ?>products/create">novi</a>
                            <a title="Izloguj se" class="" href="<?php echo base_url(); ?>users/logout">logut</a>
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
        <section id="s-hero">

            <div id="hero">
                <h1>Građevinsko preduzeće <br> <strong>TERMOMETAL</strong> <br>izgradnja stanova u Novom Sadu</h1>
                <p>Novi projekat: Bolmanska 1, u blizini Sunčanog keja</p>
                <a class="act-btn" href="<?php echo base_url(); ?>#project">Pogledaj projekat</a>
            </div>
        </section>
    </header>