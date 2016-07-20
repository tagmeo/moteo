<?php get_template_part('views/page', 'header'); ?>
<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">Sorry, no results were found</div>
    <?php get_search_form(); ?>
<?php endif; ?>
<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php get_template_part('views/content', get_post_type() !== 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
