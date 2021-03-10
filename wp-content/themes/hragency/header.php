<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hragency
 */
global $redux_demo;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!--    Подключаем Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--    Подключаем Шрифты montserrat-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <!--    swiperslider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!--    подключаем иконки fontawesome-->
    <script src="https://use.fontawesome.com/e3bd3298f7.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--leftToolbar START-->

<div class="leftToolbar d-none d-lg-block">
    <div>
        <p data-micromodal-trigger="modal-1" class="leftToolBar_text">
            <nobr>ОФОРМИТЬ ЗАЯВКУ</nobr>
        </p>
    </div>
    <a href="<?php echo $redux_demo['twlink']; ?>"><i class="fa fa-2x fa-telegram"></i></a>
    <a href="<?php echo $redux_demo['instlink']; ?>"><i class="fa fa-2x fa-instagram"></i></a>
    <a href="<?php echo $redux_demo['vklink']; ?>"><i class="fa fa-2x fa-vk"></i></a>
</div>

<!--leftToolbar START-->

<!--menu START-->

<div class="menu menu-display  text-center">
    <?php
    wp_nav_menu([
        'theme_location' => 'headerMenu',
        'container' => 'false',
        'menu_class' => 'menu-items text-center',
        'menu_id' => '',
        'echo' => true,
    ]);
    ?>
    <span class="menu-item header_menu-item-search">
        <input class="header_search-menu" type="text">
        <img class="header_lope-menu" src="<?php echo get_template_directory_uri() . '/src/images/loupe.svg' ?>" alt="">
    </span>
</div>

<!--menu START-->

<!--header START-->

<header class="header">
    <div class="container-header">
        <nav class='header_nav'>
            <span class="header_menu-item-logo">
                <a href=""><img height="40" width="70" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' )  )[0]?>" alt=""></a>
            </span>
            <span class="header_menu-item-tel">
                <a  href="tel:<?php echo $redux_demo['number-tel']; ?>"><?php echo $redux_demo['number-tel']; ?></a>
            </span>
            <?php
            wp_nav_menu([
                'theme_location' => 'headerMenu',
                'container' => 'false',
                'menu_class' => 'header_menu header_menu-item-d',
                'menu_id' => '',
                'echo' => true,
            ]);
            ?>
            <span class="header_menu-item header_menu-item-search d-none d-lg-block">
                <input class="header_search header_search-inputapp" type="text">
                <img class="header_lope" src="<?php echo get_template_directory_uri() ?>/src/images/loupe.svg" alt="">
            </span>
            <span class="header_menu-item menu-burger d-block d-lg-none">
                <span></span>
            </span>
        </nav>
    </div>
</header>

<!--header START-->