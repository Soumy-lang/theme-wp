<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<main id="site-main">
    <div class="logo-bloc-container"><?php get_template_part('template-parts/logo-in-header'); ?></div>
    <div class="contain-section">
        <div class="text-home-page">
            <h1><?php echo esc_html(get_theme_mod('contact_title', 'Contacts.')); ?></h1>
            <p><?php echo esc_html(get_theme_mod('contact_subtitle', 'A desire for a big big party or a very select congress? Contact us.')); ?></p>
        </div><br>
        <div class="bloc-contacts">
            <div class="contact">
                <h3>Location</h3>
                <p>284 bis boulevard Saint-Germain<br>75007 Paris France</p>
            </div>
            <div class="contact">
                <h3>Manager</h3>
                <p>+33 9 58 75 58 75<br>manager@service.com</p>
            </div>
            <div class="contact">
                <h3>CEO</h3>
                <p>+33 1 23 45 67 89<br>ceo@service.com</p>
            </div>
        </div>
    </div><br>

    <div class="image-home-page">
        <img src="<?php echo esc_url(get_theme_mod('contact_image', get_template_directory_uri() . '/assets/images/png/4.png')); ?>" alt="Contact Image">
    </div>
    <div class="contact-form text-home-page">
        <h1><?php echo esc_html(get_theme_mod('contact_title', 'Write us here')); ?></h1>
        <p><?php echo esc_html(get_theme_mod('contact_subtitle', 'Go ! Don\'t be shy')); ?></p>
        <form method="post" action="#">
            <select id="subject" name="subject">
                <option value="inquiry">Subject</option>
            </select>
            <input type="email" id="email" name="email" required placeholder="Email">
            <input type="tel" id="phone" name="phone" placeholder="Phone no.">
            <textarea id="message" name="message" rows="5" required placeholder="Message"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</main>

<?php get_footer(); ?>
