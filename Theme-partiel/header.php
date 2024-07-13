<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header">
        <div class="container">
            <div class="menu-toggle" id="menu-toggle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/menu.svg" alt="Menu Icon">
            </div>
            <nav class="site-nav" id="site-nav">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo.svg" alt="Logo" class="logo">
                <?php
                if (has_nav_menu('side_menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'side_menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                }
                ?>
            </nav>
        </div>
    </header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const siteNav = document.getElementById('site-nav');

        menuToggle.addEventListener('click', function() {
            siteNav.classList.toggle('open');
            const iconImg = menuToggle.querySelector('img');
            if (siteNav.classList.contains('open')) {
                iconImg.src = '<?php echo get_template_directory_uri(); ?>/assets/images/svg/close.svg';
            } else {
                iconImg.src = '<?php echo get_template_directory_uri(); ?>/assets/images/svg/menu.svg';
            }
        });
    });
</script>