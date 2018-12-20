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

<h2 class="post__title-single"><?php the_title(); ?></h2>

<div class="container content">
    <div class="main block">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="post">

                    <div class="post__content">

                        <?php the_content(); ?>

                    </div>
                </article>

            <?php endwhile ?>
        <?php else : ?>
            <?php echo '<h2>Sorry, no posts were found!</h2>'; ?>
        <?php endif; ?>

    </div>

    <div class="side">
        <?php if ( has_post_thumbnail() && !is_page() ) : ?>
            <figure class="post__image-container">
                <?php the_post_thumbnail() ?>
                <?php wp_theme_dev_show_categories(); ?>
                <p class="span-paragraph"><span class="post__meta">Posted On <?php the_date(); ?>.</span></p>
                <p class="span-paragraph"><span class="post__meta">Written by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID') ); ?>"><?php the_author(); ?>.</a></span></p>

            </figure>
        <?php endif; ?>


    </div>
</div>

<footer class="site-footer">
    <div class="container">

        <div class="site-footer__left">
            <p>&copy; 2018 Paul Bratslavsky</p>
        </div>

        <div class="site-footer__right">
            <nav class="site-footer__nav nav">
                <ul class="site-footer__nav-items">
                    <li class="site-footer__nav-item"><a href="#"> Home</a></li>
                    <li class="site-footer__nav-item"><a href="#"> About</a></li>
                    <li class="site-footer__nav-item"><a href="#"> Services</a></li>
                </ul>
            </nav>
        </div>

    </div>
</footer>
<?php wp_footer(); ?>
</body>
