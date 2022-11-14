<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Top CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/index.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Baikyaku-plus CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lp.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" rel="stylesheet">
    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
    <title>株式会社ECODA</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-light py-0">
            <div class="container-fluid pe-0">
                <a class="navbar-brand w-75 py-0" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/header_logo.png" alt="" class="w-25"></a>
                <!-- sp -->
                <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="padding: 2.5% 2.5%; color:rgba(240, 136, 51, .3); border-color: #EF8933;background-color: #EF8933; border-radius: 0rem;">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="#">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
	<main>