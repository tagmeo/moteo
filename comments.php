<?php
if (post_password_required()) {
    return;
}
?>
<section class="comments" id="comments">
    <?php if (have_comments()) : ?>
        <h2><?php get_the_title(); ?> <span class="badge"><?php get_comments_number(); ?></span></h2>
        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol>
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav>
                <ul class="pager">
                    <?php if (get_previous_comments_link()) : ?>
                        <li class="previous"><?php previous_comments_link('&larr; Previous'); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_comments_link()) : ?>
                        <li class="next"><?php next_comments_link('Next &rarr;'); ?></li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (!comments_open() && get_comments_number() !== 0 && post_type_supports(get_post_type(), 'comments')) : ?>
        <div class="alert alert-warning">
            Comments are closed.
        </div>
    <?php endif; ?>
    <?php comment_form(); ?>
</section>
