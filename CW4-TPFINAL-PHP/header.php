<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='<?php bloginfo("charset"); ?>'>
    <title><?php bloginfo("name"); ?> <?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/main.css">
    <script src="<?php bloginfo("template_url"); ?>/js/script.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/js/carrousel.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>


    <?php wp_head();?>
</head>


<body>

<div id="fleche-haut"><i class="fas fa-arrow-up"></i></div>



<header class="header-page">

    <nav class="wrapper">



        <a  href="<?php echo home_url(); ?>" class="alogo">
            <img src="<?php bloginfo ("template_url")?>/images/logo.png" alt="logo"/>
        </a>




        <div class="dropdown">


            <div class="bouton-search" id="bouton-search"><i class="fas fa-search"></i></div>
            <div class="bouton-drop" id="menu-hamburger"><i class="fas fa-bars"></i> </div>

            <div id="myDropdown" class="dropdown-content">

                <ul>

                    <?php wp_nav_menu( array(
                        'theme_location'  => 'menu_principal',
                        'container' => 'li'
                    )); ?>




                </ul>

                <div class="ligne-verticale"></div>

            </div>


        </div>

    </nav>



</header>