<time class="updated" datetime="<?php echo get_post_time('c', true); ?>">
    <?php echo get_the_date(); ?>
</time>
<p class="author byline vcard">
    By <a class="fn" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php echo get_the_author(); ?></a>
</p>
