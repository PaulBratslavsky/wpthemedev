<?php get_header(); ?>

<div class="container content">
    <div class="main block">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="post">

                    <h2 class="post__title"><?php the_title(); ?></h2>

                    <?php if ( has_post_thumbnail() && !is_page() ) : ?>
                        <figure class="post__image-container">
                            <?php the_post_thumbnail() ?>
                        </figure>
                    <?php endif; ?>

                    <div class="post__content">

                    <p class="span-paragraph"><span class="post__meta">Posted On <?php the_date(); ?>.</span></p>
                    <p class="span-paragraph"><span class="post__meta">Written by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID') ); ?>"><?php the_author(); ?>.</a></span></p>

                    <?php wp_theme_dev_show_categories(); ?>

                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink(); ?>" class="post__read-more button">Read More</a>

                    </div>
            </article>

            <?php endwhile ?>
        <?php else : ?>
            <?php echo '<h2>Sorry, no posts were found!</h2>'; ?>
        <?php endif; ?>

    </div>

    <div class="side">
        <div class="block widget-area">
            <h3>This is a widget</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <a href="#" class="button">Click Me</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>