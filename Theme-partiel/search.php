<?php
/*
Template Name: search
*/
?>

<?php get_header(); ?>

<main id="site-main">
    <div class="logo-bloc-container"><?php get_template_part('template-parts/logo-in-header'); ?></div>
    <div class="contain-section focus-middle">
        
        <h1><?php printf( esc_html__( 'Search results for : %s', 'ESGI' ), get_search_query() ); ?></h1><br>

        <div class="search-results">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="result-bloc">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <h5><?php the_date(); ?></h5>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="result-bloc">
                    <h3><?php esc_html_e( 'No results found.', 'ESGI' ); ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
