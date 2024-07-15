<?php $is_partners_template = is_page_template('partners.php');
$is_error_template = is_page_template('404.php'); ?>
<footer id="site-footer"  class="<?php echo $is_partners_template || $is_error_template ? 'fixed-footer' : ''; ?>">
    <div class="container">
        <div class="footer-section">
            <div class="footer-section-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo.svg" alt="image">
            </div>
        </div>
        <div class="footer-section"></div>
        <div class="footer-section"></div>
        <div class="footer-section">
            <div class="footer-section-content">
                <h3>Manager</h3>
                <p>+33 12345678</p>
                <p>info@esgi.fr</p>
            </div>
        </div>
        <div class="footer-section">
            <div class="footer-section-content">
                <h3>CEO</h3>
                <p>+33 12345678.</p>
                <p>ceo@esgi.fr</p>
                <ul>
                    <li><a href="#"><?= esgi_get_icon('facebook'); ?></a></li>
                    <li><a href="#"><?= esgi_get_icon('linkedin'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>