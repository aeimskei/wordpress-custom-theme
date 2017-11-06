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
        </div>
<?php get_footer(); ?>