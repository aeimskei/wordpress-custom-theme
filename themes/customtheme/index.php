<?php
/**
 * The template for displaying the index page
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="container">
    <?php if (have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2>A singled blog post</h2>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>