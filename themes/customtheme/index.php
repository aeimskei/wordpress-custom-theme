<!doctype html>
<html>
    <head>
        <title>Custom Title Theme</title>
    </head>
    <body>
        <?php if (have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>
    
            <h2>A singled blog post</h2>
            <?php the_title(); ?>
            <?php the_content(); ?>
        
        <?php endwhile; ?>
    
        <?php endif; ?>
    </body>
</html>
