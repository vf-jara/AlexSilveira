<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alex Silveira - Excelência em adequação postural</title>
    <meta name="description" content="">
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>src/logo01.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/src/site.webmanifest">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/84e9572bc3.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/bootstrap.min.css">
    <!--Css personalizado-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!--ReCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VG3FNME2T3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VG3FNME2T3');
    </script>



    <?php wp_head(); ?>
</head>

<body id="home">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--Início da Header-->
    <header>
        <!--Início da Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-nav">
            <div class="container">
                <!--Logo-->
                <a class="navbar-brand" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/logo01.png"></a>
                <!--toggler-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal"
                    aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> <!-- Fim do botão de toggle para colapsar a navbar -->
                <div class="collapse navbar-collapse bg-togler" id="navbarPrincipal">
                    <!-- Início dos Itens da Navbar-->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a id="nav-home" class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-sobre" class="nav-link" href="/sobre/">Quem é Alex Silveira</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-cursos" class="nav-link" href="/cursos/">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-galeria" class="nav-link" href="/galeria/">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-blog" class="nav-link" href="/blog/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-materiais" class="nav-link" href="/materiais/">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-contato" class="nav-link" href="/contato/">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>