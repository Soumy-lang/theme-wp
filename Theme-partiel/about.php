<?php
/*
Template Name: about us
*/
?>

<?php get_header() ?>

<main id="site-main">
    <div class="logo-bloc-container"><?php get_template_part('template-parts/logo-in-header'); ?></div>
        <div class="contain-section">
        <div class="text-home-page"><h1><?php echo esc_html(get_theme_mod('homepage_title', 'About us.')); ?></h1></div>
        <div class="image-home-page"><img src="<?php echo esc_url(get_theme_mod('homepage_image', get_template_directory_uri() . '/assets/images/png/4.png')); ?>" alt="Event"></div>
        <div class=""><?php get_template_part('template-parts/about-us-page'); ?></div>
    </div>
    <div class="text-home-page"><h1><?php echo esc_html(get_theme_mod('homepage_title', 'Our team')); ?></h1></div><br>
    <div class="our-team-images">
        <div class="team-image">
            <div><img src="<?php echo esc_url(get_theme_mod('team_image1', get_template_directory_uri() . '/assets/images/png/5.png')); ?>" alt="service"></div><div>
            <div class="text-team"><h3><?php echo esc_html(get_theme_mod('team_title', 'Sales Manager')); ?></h3></div>
            <p><?php echo wp_kses_post(get_theme_mod('contact_content', '+33 9 1234567')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('email_content', 'sale@service.co')); ?></p>
        </div>
        </div>
        <div class="team-image">
            <div><img src="<?php echo esc_url(get_theme_mod('team_image2', get_template_directory_uri() . '/assets/images/png/6.png')); ?>" alt="service"></div>
            <div class="text-team"><h3><?php echo esc_html(get_theme_mod('team_title', 'Event planner')); ?></h3></div>
            <p><?php echo wp_kses_post(get_theme_mod('contact_content', '+33 9 1234567')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('email_content', 'planner@service.co')); ?></p>
        </div>
        <div class="team-image">
            <div><img src="<?php echo esc_url(get_theme_mod('team_image3', get_template_directory_uri() . '/assets/images/png/7.png')); ?>" alt="service"></div>
            <div class="text-team"><h3><?php echo esc_html(get_theme_mod('team_title', 'Designer')); ?></h3></div>
            <p><?php echo wp_kses_post(get_theme_mod('contact_content', '+33 9 1234567')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('email_content', 'design@service.co')); ?></p>
        </div>
        <div class="team-image">
            <div><img src="<?php echo esc_url(get_theme_mod('team_image4', get_template_directory_uri() . '/assets/images/png/8.png')); ?>" alt="service"></div>
            <div class="text-team"><h3><?php echo esc_html(get_theme_mod('team_title', 'CEO')); ?></h3></div>
            <p><?php echo wp_kses_post(get_theme_mod('contact_content', '+33 9 1234567')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('email_content', 'ceo@service.co')); ?></p>
        </div>
    </div>
</main>

<?php get_footer() ?>