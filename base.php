<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <?php get_template_part('views/head'); ?>
    <body <?php body_class(); ?>>
        <?php get_template_part('views/header'); ?>
        <main class="main" role="main">
            <div class="container">
                <?php include Tagmeo\Theme\Wrapper::templatePath(); ?>
            </div>
        </main>
        <?php if (Tagmeo\Theme\Sidebar::displaySidebar()) : ?>
            <aside class="sidebar">
                <?php include Tagmeo\Theme\Wrapper::sidebarPath(); ?>
            </aside>
        <?php endif; ?>
        <?php get_template_part('views/footer'); ?>
    </body>
</html>


