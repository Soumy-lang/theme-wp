<footer id="site-footer">
    <div class="container">
        <div class="footer-section">
            <!-- Première section avec une image et copyright -->
            <div class="footer-section-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo.svg" alt="image">
            </div>
        </div>
        <div class="footer-section"></div>
        <div class="footer-section"></div>
        <div class="footer-section">
            <!-- Deuxième section avec lignes de texte -->
            <div class="footer-section-content">
                <h3>Manager</h3>
                <p>+33 12345678</p>
                <p>info@esgi.fr</p>
            </div>
        </div>
        <div class="footer-section">
            <!-- Troisième section avec lignes de texte -->
            <div class="footer-section-content">
                <h3>CEO</h3>
                <p>+33 12345678.</p>
                <p>ceo@esgi.fr</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div><p>&copy; <?= date('Y') ?> by esgi</p></div>
        <div></div>
        <div></div>
        <div>
            <ul>
                <li><a href="#"><?= esgi_get_icon('facebook'); ?></a></li>
                <li><a href="#"><?= esgi_get_icon('linkedin'); ?></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>