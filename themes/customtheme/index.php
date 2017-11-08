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

<div class="jumbotron gradient-bg margin-neg-20">
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
    
    <?php if (is_active_sidebar( 'sidebar-1') ) : ?>
        <!-- aside is actually an HTML tag, class helps us target via CSS -->
        <aside id="secondary" class="sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1'); ?>
        </aside>
    <?php endif; ?>
</div>
<?php get_footer(); ?>