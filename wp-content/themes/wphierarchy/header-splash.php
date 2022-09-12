<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="notice">
    <p style="text-align: center;">NEW - Text from custom header-splash.php!</p>
</div>

<div id="page">

    <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html__( 'Skip to content', 'wphierarchy' ); ?>
    </a>

    <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
            <p class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </p>
            <p class="site-description">
                <?php bloginfo( 'description' ); ?>
            </p>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            $args = [
                'theme_location' => 'main-menu'
            ];

            wp_nav_menu( $args );
            ?>
        </nav>

    </header>

    <div id="content" class="site-content">