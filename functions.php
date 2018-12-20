<?php

    // FUNCTION TO ADD THEME SUPPORT
    function wp_theme_dev_support() {
        // Add Featured Image Support
        add_theme_support( 'post-thumbnails' );

        // Register the nav menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu' ),
            'footer' => __( 'Footer Menu')
        ) );
    }



    add_action( 'after_setup_theme', 'wp_theme_dev_support' );

/**
 *  SHOWS POST CATEGORIES
 */
    function wp_theme_dev_show_categories() { ?>
        <?php $categories = get_categories(); ?>

        <ul>
            <?php foreach ( $categories as $category ) : ?>
                <a href="<?php echo get_category_link( $category->term_id ); ?>" >
                    <li><?php echo $category->cat_name; ?></li>
                </a>
            <?php endforeach; ?>
        </ul>

    <?php }

/**
 * Filter the except length to 100 words.
 */
function wp_theme_dev_change_length() {
    return 75;
}
add_filter( 'excerpt_length', 'wp_theme_dev_change_length' );

/**
 * Filter the excerpt "read more" string.
 */
function wp_theme_dev_change_excerpt_more() {
    return ' ... ';
}
add_filter( 'excerpt_more', 'wp_theme_dev_change_excerpt_more' );



