<?php
/**
 * The template for displaying search forms in the theme
 *
 * @package YourTheme
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/#')); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'your-theme-textdomain'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'your-theme-textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
</form>
