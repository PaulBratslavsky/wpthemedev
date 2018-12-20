<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">

    <div class="container">
        <div class="site-header__brand">
            <h1 class="site-header__heading"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a></h1>
            <small class="site-header__sub-heading"><?php bloginfo( 'description' ); ?></small>

        </div>

        <div class="site-header__search">
            <form method="get" action="<?php esc_url( home_url( '/' ) ); ?>">
                <input type="text" name="s" placeholder="search">
            </form>
        </div>
    </div>
</header>

<div class="header-image">

    <?php if ( has_post_thumbnail() && is_page() ) : ?>
        <figure class="post__image-container">
            <?php the_post_thumbnail() ?>
        </figure>
    <?php endif; ?>

</div>

<nav class="nav main-nav">
    <div class="container">
        <?php
        $arg = array(
            'theme_location' => 'primary'
        );
        ?>

        <?php wp_nav_menu( $arg ); ?>
    </div>
</nav>
