<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php get_template_part('views/page', 'header'); ?>
    <?php get_template_part('views/content', 'page'); ?>
<?php endwhile; ?>
