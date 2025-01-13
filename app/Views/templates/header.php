<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="RdDesign">
    <meta name="keywords"
        content="Prodaja stanova, garsonjera, dvosoban, jednosoban, trosoban, Novi Sad, garaza, parking, slobodno, kvadratura, sprat, prizemlje">
    <meta name="description"
        content="Vaš novi stan na lepoj lokaciji čeka na Vas!Za više od dve decenije rada izgradili smo preko 300 novih domova i uticali na razvoj novih delova Novog Sada.">
    <title><?= esc($title) ?></title>
    <link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="preload" as="style">
    <link href="<?php echo site_url('js/jquery-3.4.1.min.js'); ?>" rel="preload" as="script">
    <link href="<?php echo site_url('js/bootstrap.bundle.min.js'); ?>" rel="preload" as="script">
    <link href="<?php echo site_url('js/main.js'); ?>" rel="preload" as="script">
    <link rel="canonical" href="https://termometalnovogradnja.rs">
    <link href="<?php echo site_url('fontawesome-free-6.5.1-web/css/fontawesome.css'); ?>" rel="stylesheet" />
    <link href="<?php echo site_url('fontawesome-free-6.5.1-web/css/brands.css'); ?>" rel="stylesheet" />
    <link href="<?php echo site_url('fontawesome-free-6.5.1-web/css/solid.css'); ?>" rel="stylesheet" />
    <link rel="apple-touch-icon" href="<?php echo site_url('/slike/logo.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo site_url('slike/logo.png'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="<?php echo site_url('css/app.css'); ?>">
    <link rel="stylesheet" media="screen and (max-width: 1023px)" href="<?php echo site_url('css/small.css'); ?>">
</head>

<body>

    <header>
        <nav id="navbar" class="fixed-top">
            <div class="container d-flex align-items-center">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('slike/logo.png'); ?>"
                        alt="Logo" /></a>
                <p>Termometal D.O.O.</p>
                <div class="phone">
                    <a href="tel:+38163557528"><i class="fas fa-mobile-alt"></i>Pozovite</a>
                </div>
                <div class="nav-links">
                    <div class="link-h">
                        <a class="" href="<?php echo site_url('#'); ?>">Početna</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo site_url('#about'); ?>">O nama</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo site_url('projects#projects'); ?>">Projekti</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="<?php echo site_url('#stanovi'); ?>">Stanovi</a>
                    </div>
                    <div class="link-h">
                        <a class="" href="#contact">Kontakt</a>
                    </div>
                    <?php if (session()->get('user')) : ?>
                        <div class="link-h">
                            <a class="" href="<?php echo site_url('/users/panel'); ?>"><i
                                    class="fas fa-cog fa-2x"></i>Panel</a>
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