<?php
/**
 * The template for displaying the posts
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            
            <?php 
                if ( is_singular( 'post' ) ) {
                    the_post_navigation( array(
                        'next_text' => 'Next',
                        'prev_text' => 'Previous'
                    ) );
                }
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>