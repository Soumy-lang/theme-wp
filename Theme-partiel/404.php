<?php
/*
Template Name: 404
*/
?>

<?php get_header() ?>
<section class="error-page">
    <main id="site-main">
    <div class="logo-bloc-container"><?php get_template_part('template-parts/logo-in-header'); ?></div>
        <div class="error-content">
            <div>
                <h1><?php echo esc_html(get_theme_mod('error_title', '404 Error.')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('error_content', 'The page you were looking for couldn\'t be found. Maybe try a search ?')); ?></p>
            </div>
            <?php if (get_theme_mod('has_search_barre', false)) : ?>
                <div class="search-bar-container">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
    </main>
</section>


<?php get_footer() ?>