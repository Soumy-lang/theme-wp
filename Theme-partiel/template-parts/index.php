<section class="title-image">
    <div class="text-home-page">
        <h1><?php echo esc_html(get_theme_mod('homepage_title', 'A really professional structure for all your events !')); ?></h1>
    </div>
    <div class="image-home-page">
        <img src="<?php echo esc_url(get_theme_mod('homepage_image', get_template_directory_uri() . '/assets/images/png/1.png')); ?>" alt="Event">
    </div>
    <div class="about-home-page">
        <h1><?php echo esc_html(get_theme_mod('homepage_title', 'About us')); ?></h1>
        <p><?php echo wp_kses_post(get_theme_mod('homepage_content', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.')); ?></p>
    </div>
    <br>
    
    <div class="about-who-we-are-home-page">
        <div class="image-on-left"><img src="<?php echo esc_url(get_theme_mod('homepage_image_2', get_template_directory_uri() . '/assets/images/png/2.png')); ?>" alt="Event"></div>
        <div class="texts-about-us">
            <div>
                <h1><?php echo esc_html(get_theme_mod('homepage_title', 'Who we are ?')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('homepage_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
            <div>
                <h1><?php echo esc_html(get_theme_mod('homepage_title', 'Our vision')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('homepage_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
            <div>
                <h1><?php echo esc_html(get_theme_mod('homepage_title', 'Our mission')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('homepage_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
        </div>
        <div></div>
    </div>
</section>
