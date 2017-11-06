<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Welcome To Our Custom Site</h1>
            </div>
        </div>
        <div class="container">
            <?php if (have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2>A singled blog post</h2>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>
