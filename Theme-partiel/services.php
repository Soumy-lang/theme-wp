<?php
/*
Template Name: services
*/
?>

<?php get_header() ?>

<main id="site-main">
<div class="logo-bloc-container"><?php get_template_part('template-parts/logo-in-header'); ?></div>
    <div class="contain-section">
        <div class=""><?php get_template_part('template-parts/services-page'); ?></div><br>
        <div class="text-home-page"><h1><?php echo esc_html(get_theme_mod('services_title_2', 'Corp. Parties')); ?></h1></div>
        <div class="text-home-page"><p><?php echo wp_kses_post(get_theme_mod('corp_service', 'Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem')); ?></p></div><br>    
        <div class="our-services-images"><img class="image-on-page" src="<?php echo esc_url(get_theme_mod('about_on_page', get_template_directory_uri() . '/assets/images/png/4.png')); ?>" alt="Event"></div>
    </div>
</main>

<?php get_footer() ?>