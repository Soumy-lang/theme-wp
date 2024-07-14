<section class="about-us-page">
    <div class="about-home-page">
        <h1><?php echo esc_html(get_theme_mod('about_us_title', 'About us')); ?></h1>
        <p><?php echo wp_kses_post(get_theme_mod('about_us_content', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.')); ?></p>
    </div>
    <br>
    
    <div class="about-who-we-are-section">
        <div class="image-on-left"><img src="<?php echo esc_url(get_theme_mod('about_us_image', get_template_directory_uri() . '/assets/images/png/2.png')); ?>" alt="Event"></div>
        <div class="texts-about-us">
            <div>
                <h1><?php echo esc_html(get_theme_mod('who_we_are_title', 'Who we are ?')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('who_we_are_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
            <div>
                <h1><?php echo esc_html(get_theme_mod('our_vision_title', 'Our vision')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('our_vision_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
            <div>
                <h1><?php echo esc_html(get_theme_mod('our_mission_title', 'Our mission')); ?></h1>
                <p><?php echo wp_kses_post(get_theme_mod('our_mission_content', 'Specializing in the creation of exceptional')); ?></p>
            </div>
        </div>
    </div>
</section>
